( function( blocks, i18n, element ) {
  var el = element.createElement;
  var __ = i18n.__;

  // Note: blocks need to have a package-type name of vendor/block in order to render.
  blocks.registerBlockType( 'jmichaelward/hello-world', {
    title: 'JMW Hello World',
    icon: 'universal-access-alt',
    category: 'layout',

    edit: function( props ) {
      return el('p', {className: props.className}, 'Hello editor.');
    },

    save: function() {
      return el('p', {}, 'Hello saved content.');
    },
  } );
} (
    window.wp.blocks,
    window.wp.i18n,
    window.wp.element
) );

