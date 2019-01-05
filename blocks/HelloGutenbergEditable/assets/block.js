( function( blocks, i18n, element ) {
  var el = element.createElement;
  var __ = i18n.__;

  blocks.registerBlockType( 'jmichaelward/hello-gutenberg-editable', {
    title: 'JMW Hello Gutenberg Editable',
    icon: 'universal-access-alt',
    category: 'layout',
    attributes: {
      content: {
        type: 'string',
        source: 'html',
        selector: 'p',
      }
    },

    edit: function( props ) {
      var content = props.attributes.content;

      function onChangeContent( newContent ) {
        props.setAttributes( { content: newContent } );
      }

      return el(
          wp.editor.RichText,
          {
            tagName: 'p',
            className: props.className,
            onChange: onChangeContent,
            value: content,
          }
      );
    },

    save: function( props ) {
      var content = props.attributes.content;

      return el( wp.editor.RichText.Content, {
        tagName: 'p',
        className: props.className,
        value: content
      } );
    },
  } );
} (
    window.wp.blocks,
    window.wp.i18n,
    window.wp.element,
    window.wp
) );
