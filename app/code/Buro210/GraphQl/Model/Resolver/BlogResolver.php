<?php declare(strict_types=1);
/**
 * @author Kim Phung - kimphung@buro210.nl
 * @date 06-12-2023
 * @category BURO210
 * @package Buro210_GraphQl
 * @copyright Copyright © BURO210 (www.buro210.nl)
 */

namespace Buro210\GraphQl\Model\Resolver;

/**
 * Class BlogResolver
 *
 * @package Buro210\GraphQl\Model\Resolver\BlogResolver
 */
Class BlogResolver implements \Magento\Framework\GraphQl\Query\ResolverInterface
{
    /**
     * Resolve function.
     *
     * @param \Magento\Framework\GraphQl\Config\Element\Field $field
     * @param $context
     * @param \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info
     * @param array $value
     * @param array $args
     * 
     * @return null|array
     */
    public function resolve(
        \Magento\Framework\GraphQl\Config\Element\Field $field,
        $context,
        \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info,
        array $value = null,
        array $args = null
    ): ?array
    {
        return [
            'title' => 'My awesome blog',
            'store' => $context->getExtensionAttributes()->getStore()->getName(),
            'current_customer_id' => $context->getUserId(),
            'user_type' => $context->getUserType(),
        ];
    }
}
