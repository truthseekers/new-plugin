console.log("hello from new-plugin js");
console.log("hello from new-plugin js lala");
import { registerBlockType } from '@wordpress/blocks';


registerBlockType('truth/new-plugin-block', {
    title: 'new plugin block',
    icon: 'smiley',
    category: 'layout',
    edit: ({ className }) => <div className={className}>I am the edit test</div>,
    save: ({ className }) => <div className={className}>I am the frontend test!</div>,
});
