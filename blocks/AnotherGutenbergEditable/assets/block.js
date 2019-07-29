const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {
  RichText,
  BlockControls,
  AlignmentToolbar,
} = wp.editor;

export default function anotherGutenbergEditable() {
  registerBlockType('jmichaelward/another-gutenberg-editable', {
    title: __('JMW Another Gutenberg Editable'),
    icon: 'universal-access-alt',
    category: 'layout',
    attributes: {
      content: {
        type: 'array',
        source: 'children',
        selector: 'p',
      },
    },

    edit: ({attributes, className, setAttributes}) => {
      const {alignment, content} = attributes;
      const onChangeContent = (newContent) => {
        setAttributes({content: newContent});
      };

      const onChangeAlignment = (newAlignment) => {
        const alignmentValue = (undefined === newAlignment ?
            'none' :
            newAlignment);
        setAttributes({alignment: alignmentValue});
      };

      return (
          <div className={className}>
            {
                  <BlockControls>
                    <AlignmentToolbar value={alignment}
                                      onChange={onChangeAlignment}/>
                  </BlockControls>
            }
            <RichText.Content
                className={className}
                tagName="p"
                onChange={onChangeContent}
                value={content}
            />
          </div>
      );
    },

    save: ({attributes, className}) => {
      const {alignment, content} = attributes;
      return (
          <RichText.Content
              className={className}
              tagName="p"
              value={content}
          />
      );
    },
  });
}
