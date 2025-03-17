<?php

namespace Drupal\Tests\ai_validations\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests enabling ai_validations and its dependencies.
 *
 * @group ai_validations
 */
class InstallAiValidationsTest extends KernelTestBase {

  /**
   * Modules to enable before running the tests.
   *
   * @var array
   */
  protected static $modules = ['system', 'user', 'ai', 'field_validation'];

  /**
   * Tests if the module installs successfully.
   */
  public function testModuleCanBeEnabled() {

    try {
      // Try to enable the module.
      \Drupal::service('module_installer')->install(['ai_validations']);
      $this->assertTrue(\Drupal::service('module_handler')->moduleExists('ai_validations'), 'The module is successfully installed.');
    }
    catch (\Exception $e) {
      $this->fail('The module could not be enabled: ' . $e->getMessage());
    }
  }

}
