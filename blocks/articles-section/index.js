// JavaScript for Gutenberg block editor (if needed)

import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';

registerBlockType('belov-agency/articles-section', {
    edit: () => {
        return (
            <div className="articles-section">
                <InnerBlocks />
            </div>
        );
    },
    save: () => {
        return (
            <div className="articles-section">
                <InnerBlocks.Content />
            </div>
        );
    },
});
