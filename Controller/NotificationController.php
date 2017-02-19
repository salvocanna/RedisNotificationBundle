<?php
namespace SalvoCanna\RedisNotificationBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NotificationController extends Controller
{
    /**
     * First controller!
     *
     * @Route("/", name="redis_notification_bundle.it-works")
     * @Method("GET")
     */
    public function testAction()
    {
        return new Response('It works!');
    }
}
