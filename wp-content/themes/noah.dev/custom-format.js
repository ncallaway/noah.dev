(function (wp) {
  var ClassButton = function (props) {
    return wp.element.createElement(
      wp.editor.RichTextToolbarButton, {
        icon: 'editor-code',
        title: 'Code (class)',
        onClick: function () {
          props.onChange(wp.richText.toggleFormat(
            props.value,
            { type: 'noah-dev/code-class' }
          ));
        },
        isActive: props.isActive,
      }
    );
  }
  wp.richText.registerFormatType(
    'noah-dev/code-class', {
      title: 'Code (class)',
      tagName: 'span',
      className: 'text-class',
      edit: ClassButton,
    }
  );

  var FunctionButton = function (props) {
    return wp.element.createElement(
      wp.editor.RichTextToolbarButton, {
        icon: 'editor-customchar',
        title: 'Code (fn)',
        onClick: function () {
          props.onChange(wp.richText.toggleFormat(
            props.value,
            { type: 'noah-dev/code-function' }
          ));
        },
        isActive: props.isActive,
      }
    );
  }
  wp.richText.registerFormatType(
    'noah-dev/code-function', {
      title: 'Code (fn)',
      tagName: 'span',
      className: 'text-function',
      edit: FunctionButton,
    }
  );

  var ObjectButton = function (props) {
    return wp.element.createElement(
      wp.editor.RichTextToolbarButton, {
        icon: 'admin-site',
        title: 'Code (obj)',
        onClick: function () {
          props.onChange(wp.richText.toggleFormat(
            props.value,
            { type: 'noah-dev/code-object' }
          ));
        },
        isActive: props.isActive,
      }
    );
  }
  wp.richText.registerFormatType(
    'noah-dev/code-object', {
      title: 'Code (obj)',
      tagName: 'span',
      className: 'text-object',
      edit: ObjectButton,
    }
  );

  var PrefabButton = function (props) {
    return wp.element.createElement(
      wp.editor.RichTextToolbarButton, {
        icon: 'image-filter',
        title: 'Code (prefab)',
        onClick: function () {
          props.onChange(wp.richText.toggleFormat(
            props.value,
            { type: 'noah-dev/code-prefab' }
          ));
        },
        isActive: props.isActive,
      }
    );
  }
  wp.richText.registerFormatType(
    'noah-dev/code-prefab', {
      title: 'Code (prefab)',
      tagName: 'span',
      className: 'text-prefab',
      edit: PrefabButton,
    }
  );
})(window.wp);