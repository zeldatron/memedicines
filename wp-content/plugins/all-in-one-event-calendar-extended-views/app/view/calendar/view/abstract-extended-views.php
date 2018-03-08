<?php

/**
 * The abstract view class for extended views.
 *
 * @author     Time.ly Network Inc.
 * @since      2.0
 *
 * @package    AI1EC
 * @subpackage AI1EC.View
 */
abstract class Ai1ec_Calendar_View_Extended_Views extends Ai1ec_Calendar_View_Agenda {

	/**
	 * Gets property from event checking if it's compatibility class or array.
	 *
	 * @param mixed  $event Array of Ai1ec_Event_Compatiblity.
	 * @param string $name  Property name.
	 *
	 * @return string|null Value or null.
	 */
	protected function _get_event_value( $event, $name ) {
		if ( $event instanceof Ai1ec_Event_Compatibility ) {
			return $event->$name;
		}
		if ( is_array( $event ) ) {
			return isset( $event[$name] ) ? $event[$name] : null;
		}
		return null;
	}

	/**
	 * Sets property on event checking if it's compatibility class or array.
	 *
	 * @param mixed  $event Array of Ai1ec_Event_Compatiblity.
	 * @param string $name  Property name.
	 * @param mixed  $value Property value.
	 *
	 * @return string|null Value or null.
	 */
	protected function _set_event_value( $event, $name, $value ) {
		if ( $event instanceof Ai1ec_Event_Compatibility ) {
			$event->$name = $value;
		}
		if ( is_array( $event ) ) {
			$event[$name] = $value;
		}
	}
	
	/**
	 * Gets property from event checking if it's compatibility class or array.
	 * @return string HTML action buttons.
	 */
	protected function _action_buttons() {
		$loader                 = $this->_registry->get( 'theme.loader' );
		$action_buttons = $loader->get_file(
			'buttons.twig',
			array(
				'action_buttons'          => apply_filters(
					'ai1ec_action_buttons',
					''
				),
				'tickets_button'          => true,
				'text_tickets'            => __( 'Tickets', AI1EC_PLUGIN_NAME ),
				'has_buy_tickets_product' => apply_filters(
					'ai1ec_buy_button_product',
					false
				)
			),
			false
		)->get_content();
		return $action_buttons;
	}
}
