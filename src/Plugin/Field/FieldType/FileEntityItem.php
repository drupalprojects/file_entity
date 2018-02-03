<?php

namespace Drupal\file_entity\Plugin\Field\FieldType;

use Drupal\file\Plugin\Field\FieldType\FileItem;

/**
 * Replacement for the core file field type class.
 */
class FileEntityItem extends FileItem {

  /**
   * {@inheritdoc}
   */
  public function getUploadValidators() {
    $validators = parent::getUploadValidators();

    if (isset($validators['file_validate_extensions'])) {
      $validators['file_entity_validate_extensions'] = $validators['file_validate_extensions'];
      unset($validators['file_validate_extensions']);
    }

    return $validators;
  }

}
