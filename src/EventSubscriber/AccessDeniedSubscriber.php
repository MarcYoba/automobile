<?php 
// src/EventSubscriber/AccessDeniedSubscriber.php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Twig\Environment;

class AccessDeniedSubscriber implements EventSubscriberInterface
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public static function getSubscribedEvents(): array
    {
        // On écoute l'événement d'exception et on donne une priorité élevée
        // pour s'assurer que notre listener est exécuté tôt.
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();

        // 1. Vérifier si l'exception est un refus d'accès (AccessDeniedHttpException)
        // La méthode denyAccessUnlessGranted() dans un contrôleur lève cette exception.
        if ($exception instanceof AccessDeniedHttpException) {

            // 2. RÉCUPÉRATION DU LIEN PRÉCÉDENT (HTTP_REFERER)
            // ========================================================
            $request = $event->getRequest();
            $refererUrl = $request->headers->get('referer');
            // ========================================================
            
            // 2. Préparer la réponse personnalisée
            // Rendu de votre template Twig pour la page d'accès refusé
            
            $content = $this->twig->render('error/access_denied.html.twig', [
                'status_code' => 403,
                'status_text' => 'Accès Refusé à la Ressource',
                'referer_url' => $refererUrl,
            ]);

            // 3. Créer la réponse HTTP avec le statut 403 (Forbidden)
            $response = new Response($content, 403);
            
            // 4. Définir la nouvelle réponse pour l'événement
            $event->setResponse($response);
            
            // Facultatif: Arrêter la propagation de l'exception
            $event->stopPropagation();
        }
    }
}