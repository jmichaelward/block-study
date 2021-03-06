const {blocks, i18n, element, editor} = wp;

export default function helloGutenbergEditable() {
  blocks.registerBlockType('jmichaelward/hello-gutenberg-editable', {
    title: 'JMW Hello Gutenberg Editable',
    icon: 'universal-access-alt',
    category: 'layout',
    attributes: {
      content: {
        type: 'string',
        source: 'html',
        selector: 'p',
      },
    },

    edit: function(props) {
      var content = props.attributes.content;

      function onChangeContent(newContent) {
        props.setAttributes({content: newContent});
      }

      return element.createElement(
          editor.RichText,
          {
            tagName: 'p',
            className: props.className,
            onChange: onChangeContent,
            value: content,
          },
      );
    },

    save: function(props) {
      var content = props.attributes.content;

      return element.createElement(editor.RichText.Content, {
        tagName: 'p',
        className: props.className,
        value: content,
      });
    },
  });
}
