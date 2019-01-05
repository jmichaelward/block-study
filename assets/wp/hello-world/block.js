( function( blocks, i18n, element ) {
  var el = element.createElement;
  var __ = i18n.__;
  var blockStyle = { backgroundColor: '#900', color: '#fff', padding: '20px' };

  // Note: blocks need to have a package-type name of vendor/block in order to render.
  blocks.registerBlockType( 'jmichaelward/hello-world', {
    title: 'JMW Hello World',
    icon: 'universal-access-alt',
    category: 'layout',

    edit: function( props ) {
      return el('p', {style: blockStyle, className: props.className}, 'Hello editor.');
    },

    save: function() {
      return el('p', {style: blockStyle}, 'Hello saved content.');
    },
  } );
} (
    window.wp.blocks,
    window.wp.i18n,
    window.wp.element
) );

