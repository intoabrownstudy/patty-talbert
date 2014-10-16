<?
    function register_entities() {
      register_sidebar('events');
    }
    add_action('init', 'register_entities');

?>