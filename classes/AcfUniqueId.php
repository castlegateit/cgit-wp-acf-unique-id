<?php

namespace Castlegate\AcfUniqueId;

use acf_field;

class AcfUniqueId extends acf_field
{
    /**
     * Field type
     *
     * @var string
     */
    public $name = 'unique_id';

    /**
     * Field type label
     *
     * @var string
     */
    public $label = 'Unique ID';

    /**
     * Field category
     *
     * @var string
     */
    public $category = 'basic';

    /**
     * Registration
     *
     * @return void
     */
    public static function register()
    {
        $instance = new static();
    }

    /**
     * Render field
     *
     * @param array $field
     * @return void
     */
    public function render_field($field)
    {
        printf(
            '<input type="text" name="%s" value="%s" readonly>',
            esc_attr($field['name']),
            esc_attr($field['value'])
        );
    }

    /**
     * Update field value
     *
     * @param string $value
     * @param mixed $post_id
     * @param array $field
     * @return string
     */
    public function update_value($value, $post_id, $field)
    {
        if ($value) {
            return $value;
        }

        return substr(bin2hex(random_bytes(32)), 0, 32);
    }
}
