import { registerBlockVariation } from '@wordpress/blocks';
import './index.scss';

const cubeCount = 24;
const innerBlocks = Array.from({ length: cubeCount }, () => [
    'core/group',
    {
        className: 'cube',
    },
]);

registerBlockVariation('core/group', {
    name: 'animate-background',
    title: 'Animate Background',
    description: 'A group block with an animated background.',
    attributes: {
        className: 'is-style-animate-background',
        templateLock: 'all',
    },
    styleHandle: 'background-animations-style',
    isActive: (blockAttributes, variationAttributes) =>
        blockAttributes.className === variationAttributes.className,
    innerBlocks: innerBlocks,
});
