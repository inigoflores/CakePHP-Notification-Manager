<?php
namespace OraInteractive\NotificationManager;
    
App::uses('Notification', 'NotificationManager.Model');

/**
 * 
 */
class NotificationsShell extends AppShell
{
	public function main()
	{
        $NotificationModel = new Notification();
        
        $notifications = $NotificationModel->findBySentAndErrors(false, null);
        
        foreach ($notifications as $notification) {
            OraInteractive\NotificationManager\Notifier::notify($notification);
        }
	}

}

