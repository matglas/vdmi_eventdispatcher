<?php

namespace Drupal\vdmi_eventdispatcher\EventSubscriber;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class StockMarketSubscriber implements EventSubscriberInterface  {

  /**
   * Registers the methods in this class that should be listeners.
   *
   * @return array
   *   An array of event listener definitions.
   */
  static function getSubscribedEvents() {

    // - Return a list of events names as key.
    //   - With elements containing a method name
    //     or a array with method name and priority.
    //
    //  For exampl like this with multiple callbacks:
    //
    //  $events['event.name'] = array();
    //  $events['event.name'][] = 'static callback function on this object';
    //  $events['event.name'][] = array(
    //    'static callback function on this object',
    //    10
    //  );
    //
    //  or like this for a single callback:
    //
    //  $events['event.name'] = array();
    //  $events['event.name'] = array(
    //    'static callback function on this object',
    //    10
    //  );
    //
    //  or like this when the priority is not important.
    //
    //  $events['event.name'] = 'static callback function on this object';

  	$events['bank.money_transfer'] = 'onMoneyTransfer';
  	return $events;
  }

	static function onMoneyTransfer(Event $event) {
    drupal_set_message('Money was transferred. Event thrown by Subscriber.', 'status', TRUE);
  }

}