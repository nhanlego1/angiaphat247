<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = '188.166.245.155';
$options['db_port'] = '3306';
$options['db_passwd'] = 'AMRu7QrGqh';
$options['db_name'] = 'angiaphat2phanme';
$options['db_user'] = 'angiaphat2phanme';
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.51',
      'description' => 'This platform is running Drupal 7.51',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => './profiles/standard/standard.profile',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.51',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.51',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7016',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.51',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/boot.test',
          6 => 'tests/bootstrap.test',
          7 => 'tests/cache.test',
          8 => 'tests/common.test',
          9 => 'tests/database_test.test',
          10 => 'tests/entity_crud.test',
          11 => 'tests/entity_crud_hook_test.test',
          12 => 'tests/entity_query.test',
          13 => 'tests/error.test',
          14 => 'tests/file.test',
          15 => 'tests/filetransfer.test',
          16 => 'tests/form.test',
          17 => 'tests/graph.test',
          18 => 'tests/image.test',
          19 => 'tests/lock.test',
          20 => 'tests/mail.test',
          21 => 'tests/menu.test',
          22 => 'tests/module.test',
          23 => 'tests/pager.test',
          24 => 'tests/password.test',
          25 => 'tests/path.test',
          26 => 'tests/registry.test',
          27 => 'tests/schema.test',
          28 => 'tests/session.test',
          29 => 'tests/tablesort.test',
          30 => 'tests/theme.test',
          31 => 'tests/unicode.test',
          32 => 'tests/update.test',
          33 => 'tests/xmlrpc.test',
          34 => 'tests/upgrade/upgrade.test',
          35 => 'tests/upgrade/upgrade.comment.test',
          36 => 'tests/upgrade/upgrade.filter.test',
          37 => 'tests/upgrade/upgrade.forum.test',
          38 => 'tests/upgrade/upgrade.locale.test',
          39 => 'tests/upgrade/upgrade.menu.test',
          40 => 'tests/upgrade/upgrade.node.test',
          41 => 'tests/upgrade/upgrade.taxonomy.test',
          42 => 'tests/upgrade/upgrade.trigger.test',
          43 => 'tests/upgrade/upgrade.translatable.test',
          44 => 'tests/upgrade/upgrade.upload.test',
          45 => 'tests/upgrade/upgrade.user.test',
          46 => 'tests/upgrade/update.aggregator.test',
          47 => 'tests/upgrade/update.trigger.test',
          48 => 'tests/upgrade/update.field.test',
          49 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7081',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.51',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.51',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7019',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '101',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup the Drupal database and files or migrate them to another environment.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/destinations.inc',
          1 => 'includes/profiles.inc',
          2 => 'includes/schedules.inc',
        ),
        'configure' => 'admin/config/system/backup_migrate',
        'version' => '7.x-3.1',
        'project' => 'backup_migrate',
        'datestamp' => '1431350582',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'back_to_top' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/back_to_top/back_to_top.module',
      'name' => 'back_to_top',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Back To Top',
        'description' => 'Back To Top adds a button that hovers in the bottom of your screen and allow users to smoothly scroll up the page using jQuery.',
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/back_to_top',
        'version' => '7.x-1.5',
        'project' => 'back_to_top',
        'datestamp' => '1450224247',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'context' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/context/context.module',
      'name' => 'context',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'description' => 'Provide modules with a cache that lasts for a single page request.',
        'package' => 'Context',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/context.test',
          1 => 'tests/context.conditions.test',
          2 => 'tests/context.reactions.test',
        ),
        'version' => '7.x-3.7',
        'project' => 'context',
        'datestamp' => '1463605446',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.7',
    ),
    'context_layouts' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
      'name' => 'context_layouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context layouts',
        'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/context_layouts_reaction_block.inc',
        ),
        'version' => '7.x-3.7',
        'project' => 'context',
        'datestamp' => '1463605446',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.7',
    ),
    'context_ui' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/context/context_ui/context_ui.module',
      'name' => 'context_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context UI',
        'description' => 'Provides a simple UI for settings up a site structure using Context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'configure' => 'admin/structure/context',
        'files' => 
        array (
          0 => 'context.module',
          1 => 'tests/context_ui.test',
        ),
        'version' => '7.x-3.7',
        'project' => 'context',
        'datestamp' => '1463605446',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.7',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/css-cache.inc',
          2 => 'includes/math-expr.inc',
          3 => 'includes/stylizer.inc',
          4 => 'tests/css_cache.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'term_depth' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
      'name' => 'term_depth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Term Depth access',
        'description' => 'Controls access to context based upon term depth',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'version' => '7.x-1.11',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7006',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'configure' => 'admin/config/development/generate',
        'files' => 
        array (
          0 => 'devel_generate.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'features' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '7.x',
        'package' => 'Features',
        'files' => 
        array (
          0 => 'tests/features.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'image',
          1 => 'strongarm',
          2 => 'taxonomy',
          3 => 'views',
        ),
        'configure' => 'admin/structure/features/settings',
        'version' => '7.x-2.10',
        'project' => 'features',
        'datestamp' => '1461011641',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'imce' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '7.x',
        'package' => 'Media',
        'configure' => 'admin/config/media/imce',
        'version' => '7.x-1.10',
        'project' => 'imce',
        'datestamp' => '1459346870',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.10',
    ),
    'imce_wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/imce_wysiwyg/imce_wysiwyg.module',
      'name' => 'imce_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Wysiwyg API bridge',
        'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
        'package' => 'User interface',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imce',
          1 => 'wysiwyg',
        ),
        'version' => '7.x-1.0',
        'project' => 'imce_wysiwyg',
        'datestamp' => '1317851503',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'jquery_update' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Update jQuery and jQuery UI to a more recent version.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'jquery_update.module',
          1 => 'jquery_update.install',
        ),
        'configure' => 'admin/config/development/jquery_update',
        'version' => '7.x-2.7',
        'project' => 'jquery_update',
        'datestamp' => '1445379855',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.7',
    ),
    'module_filter' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/module_filter/module_filter.module',
      'name' => 'module_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module filter',
        'description' => 'Filter the modules list.',
        'core' => '7.x',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'module_filter.install',
          1 => 'module_filter.js',
          2 => 'module_filter.module',
          3 => 'module_filter.admin.inc',
          4 => 'module_filter.theme.inc',
          5 => 'css/module_filter.css',
          6 => 'css/module_filter_tab.css',
          7 => 'js/module_filter.js',
          8 => 'js/module_filter_tab.js',
        ),
        'configure' => 'admin/config/user-interface/modulefilter',
        'version' => '7.x-2.0',
        'project' => 'module_filter',
        'datestamp' => '1424631189',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'i18n_panels' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/panels/i18n_panels/i18n_panels.module',
      'name' => 'i18n_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels translation',
        'description' => 'Supports translatable panels items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'panels',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-3.8',
        'project' => 'panels',
        'datestamp' => '1476582295',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'panels' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7308',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels',
        'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
        'core' => '7.x',
        'package' => 'Panels',
        'configure' => 'admin/structure/panels',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'panels.module',
          1 => 'includes/common.inc',
          2 => 'includes/legacy.inc',
          3 => 'includes/plugins.inc',
          4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          5 => 'tests/PanelsEntityViewWebTestCase.test',
          6 => 'tests/PanelsNodeViewWebTestCase.test',
          7 => 'tests/PanelsTermViewWebTestCase.test',
          8 => 'tests/PanelsUserViewWebTestCase.test',
        ),
        'version' => '7.x-3.8',
        'project' => 'panels',
        'datestamp' => '1476582295',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'panels_ipe' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels In-Place Editor',
        'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'configure' => 'admin/structure/panels',
        'files' => 
        array (
          0 => 'panels_ipe.module',
        ),
        'version' => '7.x-3.8',
        'project' => 'panels',
        'datestamp' => '1476582295',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'panels_mini' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mini panels',
        'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/export_ui/panels_mini_ui.class.php',
        ),
        'version' => '7.x-3.8',
        'project' => 'panels',
        'datestamp' => '1476582295',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'panels_node' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/panels/panels_node/panels_node.module',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panel nodes',
        'description' => 'Create nodes that are divided into areas with selectable content.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'configure' => 'admin/structure/panels',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'panels_node.module',
        ),
        'version' => '7.x-3.8',
        'project' => 'panels',
        'datestamp' => '1476582295',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'pathauto' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7006',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathauto.migrate.inc',
          1 => 'pathauto.test',
        ),
        'configure' => 'admin/config/search/path/patterns',
        'recommends' => 
        array (
          0 => 'redirect',
        ),
        'version' => '7.x-1.3',
        'project' => 'pathauto',
        'datestamp' => '1444232655',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'taxonomy_menu' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/taxonomy_menu/taxonomy_menu.module',
      'name' => 'taxonomy_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'menu',
        ),
        'description' => 'Adds links to taxonomy terms to a menu.',
        'name' => 'Taxonomy menu',
        'package' => 'Taxonomy menu',
        'files' => 
        array (
          0 => 'taxonomy_menu.batch.inc',
          1 => 'taxonomy_menu.database.inc',
          2 => 'taxonomy_menu.module',
          3 => 'taxonomy_menu.test',
          4 => 'taxonomy_menu.install',
        ),
        'version' => '7.x-1.5',
        'project' => 'taxonomy_menu',
        'datestamp' => '1396359247',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.test',
        ),
        'version' => '7.x-1.6',
        'project' => 'token',
        'datestamp' => '1425149060',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7302',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_messages.inc',
          2 => 'handlers/views_handler_area_result.inc',
          3 => 'handlers/views_handler_area_text.inc',
          4 => 'handlers/views_handler_area_text_custom.inc',
          5 => 'handlers/views_handler_area_view.inc',
          6 => 'handlers/views_handler_argument.inc',
          7 => 'handlers/views_handler_argument_date.inc',
          8 => 'handlers/views_handler_argument_formula.inc',
          9 => 'handlers/views_handler_argument_many_to_one.inc',
          10 => 'handlers/views_handler_argument_null.inc',
          11 => 'handlers/views_handler_argument_numeric.inc',
          12 => 'handlers/views_handler_argument_string.inc',
          13 => 'handlers/views_handler_argument_group_by_numeric.inc',
          14 => 'handlers/views_handler_field.inc',
          15 => 'handlers/views_handler_field_counter.inc',
          16 => 'handlers/views_handler_field_boolean.inc',
          17 => 'handlers/views_handler_field_contextual_links.inc',
          18 => 'handlers/views_handler_field_ctools_dropdown.inc',
          19 => 'handlers/views_handler_field_custom.inc',
          20 => 'handlers/views_handler_field_date.inc',
          21 => 'handlers/views_handler_field_entity.inc',
          22 => 'handlers/views_handler_field_links.inc',
          23 => 'handlers/views_handler_field_markup.inc',
          24 => 'handlers/views_handler_field_math.inc',
          25 => 'handlers/views_handler_field_numeric.inc',
          26 => 'handlers/views_handler_field_prerender_list.inc',
          27 => 'handlers/views_handler_field_time_interval.inc',
          28 => 'handlers/views_handler_field_serialized.inc',
          29 => 'handlers/views_handler_field_machine_name.inc',
          30 => 'handlers/views_handler_field_url.inc',
          31 => 'handlers/views_handler_filter.inc',
          32 => 'handlers/views_handler_filter_boolean_operator.inc',
          33 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          34 => 'handlers/views_handler_filter_combine.inc',
          35 => 'handlers/views_handler_filter_date.inc',
          36 => 'handlers/views_handler_filter_equality.inc',
          37 => 'handlers/views_handler_filter_entity_bundle.inc',
          38 => 'handlers/views_handler_filter_group_by_numeric.inc',
          39 => 'handlers/views_handler_filter_in_operator.inc',
          40 => 'handlers/views_handler_filter_many_to_one.inc',
          41 => 'handlers/views_handler_filter_numeric.inc',
          42 => 'handlers/views_handler_filter_string.inc',
          43 => 'handlers/views_handler_filter_fields_compare.inc',
          44 => 'handlers/views_handler_relationship.inc',
          45 => 'handlers/views_handler_relationship_groupwise_max.inc',
          46 => 'handlers/views_handler_sort.inc',
          47 => 'handlers/views_handler_sort_date.inc',
          48 => 'handlers/views_handler_sort_formula.inc',
          49 => 'handlers/views_handler_sort_group_by_numeric.inc',
          50 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          51 => 'handlers/views_handler_sort_random.inc',
          52 => 'includes/base.inc',
          53 => 'includes/handlers.inc',
          54 => 'includes/plugins.inc',
          55 => 'includes/view.inc',
          56 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          57 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          58 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          59 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          60 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          61 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          62 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          63 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          64 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          65 => 'modules/book/views_plugin_argument_default_book_root.inc',
          66 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          67 => 'modules/comment/views_handler_field_comment.inc',
          68 => 'modules/comment/views_handler_field_comment_depth.inc',
          69 => 'modules/comment/views_handler_field_comment_link.inc',
          70 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          71 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          72 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          73 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          74 => 'modules/comment/views_handler_field_comment_node_link.inc',
          75 => 'modules/comment/views_handler_field_comment_username.inc',
          76 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          77 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          78 => 'modules/comment/views_handler_field_node_comment.inc',
          79 => 'modules/comment/views_handler_field_node_new_comments.inc',
          80 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          81 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          82 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          83 => 'modules/comment/views_handler_filter_node_comment.inc',
          84 => 'modules/comment/views_handler_sort_comment_thread.inc',
          85 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          86 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          87 => 'modules/comment/views_plugin_row_comment_rss.inc',
          88 => 'modules/comment/views_plugin_row_comment_view.inc',
          89 => 'modules/contact/views_handler_field_contact_link.inc',
          90 => 'modules/field/views_handler_field_field.inc',
          91 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          92 => 'modules/field/views_handler_argument_field_list.inc',
          93 => 'modules/field/views_handler_filter_field_list_boolean.inc',
          94 => 'modules/field/views_handler_argument_field_list_string.inc',
          95 => 'modules/field/views_handler_filter_field_list.inc',
          96 => 'modules/filter/views_handler_field_filter_format_name.inc',
          97 => 'modules/locale/views_handler_field_node_language.inc',
          98 => 'modules/locale/views_handler_filter_node_language.inc',
          99 => 'modules/locale/views_handler_argument_locale_group.inc',
          100 => 'modules/locale/views_handler_argument_locale_language.inc',
          101 => 'modules/locale/views_handler_field_locale_group.inc',
          102 => 'modules/locale/views_handler_field_locale_language.inc',
          103 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          104 => 'modules/locale/views_handler_filter_locale_group.inc',
          105 => 'modules/locale/views_handler_filter_locale_language.inc',
          106 => 'modules/locale/views_handler_filter_locale_version.inc',
          107 => 'modules/locale/views_handler_sort_node_language.inc',
          108 => 'modules/node/views_handler_argument_dates_various.inc',
          109 => 'modules/node/views_handler_argument_node_language.inc',
          110 => 'modules/node/views_handler_argument_node_nid.inc',
          111 => 'modules/node/views_handler_argument_node_type.inc',
          112 => 'modules/node/views_handler_argument_node_vid.inc',
          113 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          114 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          115 => 'modules/node/views_handler_field_node.inc',
          116 => 'modules/node/views_handler_field_node_link.inc',
          117 => 'modules/node/views_handler_field_node_link_delete.inc',
          118 => 'modules/node/views_handler_field_node_link_edit.inc',
          119 => 'modules/node/views_handler_field_node_revision.inc',
          120 => 'modules/node/views_handler_field_node_revision_link.inc',
          121 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          122 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          123 => 'modules/node/views_handler_field_node_path.inc',
          124 => 'modules/node/views_handler_field_node_type.inc',
          125 => 'modules/node/views_handler_field_node_version_count.inc',
          126 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          127 => 'modules/node/views_handler_filter_node_access.inc',
          128 => 'modules/node/views_handler_filter_node_status.inc',
          129 => 'modules/node/views_handler_filter_node_type.inc',
          130 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          131 => 'modules/node/views_handler_filter_node_version_count.inc',
          132 => 'modules/node/views_handler_sort_node_version_count.inc',
          133 => 'modules/node/views_plugin_argument_default_node.inc',
          134 => 'modules/node/views_plugin_argument_validate_node.inc',
          135 => 'modules/node/views_plugin_row_node_rss.inc',
          136 => 'modules/node/views_plugin_row_node_view.inc',
          137 => 'modules/profile/views_handler_field_profile_date.inc',
          138 => 'modules/profile/views_handler_field_profile_list.inc',
          139 => 'modules/profile/views_handler_filter_profile_selection.inc',
          140 => 'modules/search/views_handler_argument_search.inc',
          141 => 'modules/search/views_handler_field_search_score.inc',
          142 => 'modules/search/views_handler_filter_search.inc',
          143 => 'modules/search/views_handler_sort_search_score.inc',
          144 => 'modules/search/views_plugin_row_search_view.inc',
          145 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          146 => 'modules/statistics/views_handler_field_node_counter_timestamp.inc',
          147 => 'modules/statistics/views_handler_field_statistics_numeric.inc',
          148 => 'modules/system/views_handler_argument_file_fid.inc',
          149 => 'modules/system/views_handler_field_file.inc',
          150 => 'modules/system/views_handler_field_file_extension.inc',
          151 => 'modules/system/views_handler_field_file_filemime.inc',
          152 => 'modules/system/views_handler_field_file_uri.inc',
          153 => 'modules/system/views_handler_field_file_status.inc',
          154 => 'modules/system/views_handler_filter_file_status.inc',
          155 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          156 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          157 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          158 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_join.inc',
          159 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          160 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          161 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          162 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          163 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          164 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          165 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          166 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          167 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth_join.inc',
          168 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          169 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          170 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          171 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          172 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          173 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          174 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          175 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          176 => 'modules/system/views_handler_filter_system_type.inc',
          177 => 'modules/translation/views_handler_argument_node_tnid.inc',
          178 => 'modules/translation/views_handler_field_node_link_translate.inc',
          179 => 'modules/translation/views_handler_field_node_translation_link.inc',
          180 => 'modules/translation/views_handler_filter_node_tnid.inc',
          181 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          182 => 'modules/translation/views_handler_relationship_translation.inc',
          183 => 'modules/user/views_handler_argument_user_uid.inc',
          184 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          185 => 'modules/user/views_handler_field_user.inc',
          186 => 'modules/user/views_handler_field_user_language.inc',
          187 => 'modules/user/views_handler_field_user_link.inc',
          188 => 'modules/user/views_handler_field_user_link_cancel.inc',
          189 => 'modules/user/views_handler_field_user_link_edit.inc',
          190 => 'modules/user/views_handler_field_user_mail.inc',
          191 => 'modules/user/views_handler_field_user_name.inc',
          192 => 'modules/user/views_handler_field_user_permissions.inc',
          193 => 'modules/user/views_handler_field_user_picture.inc',
          194 => 'modules/user/views_handler_field_user_roles.inc',
          195 => 'modules/user/views_handler_filter_user_current.inc',
          196 => 'modules/user/views_handler_filter_user_name.inc',
          197 => 'modules/user/views_handler_filter_user_permissions.inc',
          198 => 'modules/user/views_handler_filter_user_roles.inc',
          199 => 'modules/user/views_plugin_argument_default_current_user.inc',
          200 => 'modules/user/views_plugin_argument_default_user.inc',
          201 => 'modules/user/views_plugin_argument_validate_user.inc',
          202 => 'modules/user/views_plugin_row_user_view.inc',
          203 => 'plugins/views_plugin_access.inc',
          204 => 'plugins/views_plugin_access_none.inc',
          205 => 'plugins/views_plugin_access_perm.inc',
          206 => 'plugins/views_plugin_access_role.inc',
          207 => 'plugins/views_plugin_argument_default.inc',
          208 => 'plugins/views_plugin_argument_default_php.inc',
          209 => 'plugins/views_plugin_argument_default_fixed.inc',
          210 => 'plugins/views_plugin_argument_default_raw.inc',
          211 => 'plugins/views_plugin_argument_validate.inc',
          212 => 'plugins/views_plugin_argument_validate_numeric.inc',
          213 => 'plugins/views_plugin_argument_validate_php.inc',
          214 => 'plugins/views_plugin_cache.inc',
          215 => 'plugins/views_plugin_cache_none.inc',
          216 => 'plugins/views_plugin_cache_time.inc',
          217 => 'plugins/views_plugin_display.inc',
          218 => 'plugins/views_plugin_display_attachment.inc',
          219 => 'plugins/views_plugin_display_block.inc',
          220 => 'plugins/views_plugin_display_default.inc',
          221 => 'plugins/views_plugin_display_embed.inc',
          222 => 'plugins/views_plugin_display_extender.inc',
          223 => 'plugins/views_plugin_display_feed.inc',
          224 => 'plugins/views_plugin_display_page.inc',
          225 => 'plugins/views_plugin_exposed_form_basic.inc',
          226 => 'plugins/views_plugin_exposed_form.inc',
          227 => 'plugins/views_plugin_exposed_form_input_required.inc',
          228 => 'plugins/views_plugin_localization_core.inc',
          229 => 'plugins/views_plugin_localization.inc',
          230 => 'plugins/views_plugin_localization_none.inc',
          231 => 'plugins/views_plugin_pager.inc',
          232 => 'plugins/views_plugin_pager_full.inc',
          233 => 'plugins/views_plugin_pager_mini.inc',
          234 => 'plugins/views_plugin_pager_none.inc',
          235 => 'plugins/views_plugin_pager_some.inc',
          236 => 'plugins/views_plugin_query.inc',
          237 => 'plugins/views_plugin_query_default.inc',
          238 => 'plugins/views_plugin_row.inc',
          239 => 'plugins/views_plugin_row_fields.inc',
          240 => 'plugins/views_plugin_row_rss_fields.inc',
          241 => 'plugins/views_plugin_style.inc',
          242 => 'plugins/views_plugin_style_default.inc',
          243 => 'plugins/views_plugin_style_grid.inc',
          244 => 'plugins/views_plugin_style_list.inc',
          245 => 'plugins/views_plugin_style_jump_menu.inc',
          246 => 'plugins/views_plugin_style_mapping.inc',
          247 => 'plugins/views_plugin_style_rss.inc',
          248 => 'plugins/views_plugin_style_summary.inc',
          249 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          250 => 'plugins/views_plugin_style_summary_unformatted.inc',
          251 => 'plugins/views_plugin_style_table.inc',
          252 => 'tests/handlers/views_handlers.test',
          253 => 'tests/handlers/views_handler_area_text.test',
          254 => 'tests/handlers/views_handler_argument_null.test',
          255 => 'tests/handlers/views_handler_argument_string.test',
          256 => 'tests/handlers/views_handler_field.test',
          257 => 'tests/handlers/views_handler_field_boolean.test',
          258 => 'tests/handlers/views_handler_field_custom.test',
          259 => 'tests/handlers/views_handler_field_counter.test',
          260 => 'tests/handlers/views_handler_field_date.test',
          261 => 'tests/handlers/views_handler_field_file_extension.test',
          262 => 'tests/handlers/views_handler_field_file_size.test',
          263 => 'tests/handlers/views_handler_field_math.test',
          264 => 'tests/handlers/views_handler_field_url.test',
          265 => 'tests/handlers/views_handler_field_xss.test',
          266 => 'tests/handlers/views_handler_filter_combine.test',
          267 => 'tests/handlers/views_handler_filter_date.test',
          268 => 'tests/handlers/views_handler_filter_equality.test',
          269 => 'tests/handlers/views_handler_filter_in_operator.test',
          270 => 'tests/handlers/views_handler_filter_numeric.test',
          271 => 'tests/handlers/views_handler_filter_string.test',
          272 => 'tests/handlers/views_handler_sort_random.test',
          273 => 'tests/handlers/views_handler_sort_date.test',
          274 => 'tests/handlers/views_handler_sort.test',
          275 => 'tests/test_handlers/views_test_area_access.inc',
          276 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          277 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          278 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          279 => 'tests/plugins/views_plugin_display.test',
          280 => 'tests/styles/views_plugin_style_jump_menu.test',
          281 => 'tests/styles/views_plugin_style.test',
          282 => 'tests/styles/views_plugin_style_base.test',
          283 => 'tests/styles/views_plugin_style_mapping.test',
          284 => 'tests/styles/views_plugin_style_unformatted.test',
          285 => 'tests/views_access.test',
          286 => 'tests/views_analyze.test',
          287 => 'tests/views_basic.test',
          288 => 'tests/views_argument_default.test',
          289 => 'tests/views_argument_validator.test',
          290 => 'tests/views_exposed_form.test',
          291 => 'tests/field/views_fieldapi.test',
          292 => 'tests/views_glossary.test',
          293 => 'tests/views_groupby.test',
          294 => 'tests/views_handlers.test',
          295 => 'tests/views_module.test',
          296 => 'tests/views_pager.test',
          297 => 'tests/views_plugin_localization_test.inc',
          298 => 'tests/views_translatable.test',
          299 => 'tests/views_query.test',
          300 => 'tests/views_upgrade.test',
          301 => 'tests/views_test.views_default.inc',
          302 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          303 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          304 => 'tests/node/views_node_revision_relations.test',
          305 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          306 => 'tests/user/views_handler_field_user_name.test',
          307 => 'tests/user/views_user_argument_default.test',
          308 => 'tests/user/views_user_argument_validate.test',
          309 => 'tests/user/views_user.test',
          310 => 'tests/views_cache.test',
          311 => 'tests/views_view.test',
          312 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.14',
        'project' => 'views',
        'datestamp' => '1466019588',
      ),
      'version' => '7.x-3.14',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.14',
        'project' => 'views',
        'datestamp' => '1466019588',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.14',
    ),
    'webform' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7430',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'php' => '5.3',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'files' => 
        array (
          0 => 'includes/webform.webformconditionals.inc',
          1 => 'includes/exporters/webform_exporter_delimited.inc',
          2 => 'includes/exporters/webform_exporter_excel_delimited.inc',
          3 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
          4 => 'includes/exporters/webform_exporter.inc',
          5 => 'views/webform_handler_area_result_pager.inc',
          6 => 'views/webform_handler_field_form_body.inc',
          7 => 'views/webform_handler_field_is_draft.inc',
          8 => 'views/webform_handler_field_node_link_edit.inc',
          9 => 'views/webform_handler_field_node_link_results.inc',
          10 => 'views/webform_handler_field_submission_count.inc',
          11 => 'views/webform_handler_field_submission_data.inc',
          12 => 'views/webform_handler_field_submission_link.inc',
          13 => 'views/webform_handler_field_webform_status.inc',
          14 => 'views/webform_handler_filter_is_draft.inc',
          15 => 'views/webform_handler_filter_submission_data.inc',
          16 => 'views/webform_handler_filter_webform_status.inc',
          17 => 'views/webform_handler_numeric_data.inc',
          18 => 'views/webform_handler_relationship_submission_data.inc',
          19 => 'views/webform_plugin_row_submission_view.inc',
          20 => 'views/webform.views.inc',
          21 => 'tests/components.test',
          22 => 'tests/conditionals.test',
          23 => 'tests/permissions.test',
          24 => 'tests/submission.test',
          25 => 'tests/webform.test',
        ),
        'version' => '7.x-4.14',
        'project' => 'webform',
        'datestamp' => '1472386754',
      ),
      'version' => '7.x-4.14',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows to edit content with client-side editors.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/wysiwyg',
        'files' => 
        array (
          0 => 'wysiwyg.module',
          1 => 'tests/wysiwyg.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'wysiwyg',
        'datestamp' => '1349213776',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'agp' => 
    array (
      'filename' => false,
      'name' => 'agp',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'booking' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/modules/custom/booking/booking.module',
      'name' => 'booking',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Booking ticket',
        'description' => 'Plugin allow check cheaper ticket of 3 company',
        'package' => 'An Gia Phat',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'assets/plugins/tooltipster/tooltipster.bundle.min.css',
            1 => 'assets/plugins/icheck/skins/flat/_all.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'assets/plugins/tooltipster/tooltipster.bundle.min.js',
          1 => 'assets/plugins/icheck/icheck.min.js',
          2 => 'assets/js/booking.js',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
  ),
  'themes' => 
  array (
    'adminimal' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/themes/adminimal_theme/adminimal.info',
      'name' => 'adminimal',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Adminimal',
        'description' => 'Minimalist administration theme.',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'js/jRespond.js',
          1 => 'js/adminimal_theme.js',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
          'style_checkboxes' => '1',
          'display_icons_config' => '1',
          'rounded_buttons' => '1',
          'sticky_actions' => '0',
          'avoid_custom_font' => '0',
          'adminimal_ckeditor' => '1',
          'custom_css' => '0',
          'use_custom_media_queries' => '0',
          'media_query_mobile' => 'only screen and (max-width: 480px)',
          'media_query_tablet' => 'only screen and (min-width : 481px) and (max-width : 1024px)',
        ),
        'regions' => 
        array (
          'hidden' => 'Hidden',
          'content_before' => 'Before Content',
          'sidebar_left' => 'Sidebar Left',
          'content' => 'Content',
          'sidebar_right' => 'Sidebar Right',
          'content_after' => 'After Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'version' => '7.x-1.24',
        'project' => 'adminimal_theme',
        'datestamp' => '1456190957',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.24',
    ),
    'angiaphat' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/sites/all/themes/angiaphat/angiaphat.info',
      'name' => 'angiaphat',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'An Gia Phat',
        'description' => 'An Gia Phat theme.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/booking.css',
            1 => 'css/form.css',
            2 => 'css/owl.carousel.css',
            3 => 'css/stuck.css',
            4 => 'css/style.css',
            5 => 'font/font-awesome.css',
            6 => 'css/jquery.datetimepicker.min.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/jquery-migrate-1.1.1.js',
          1 => 'js/script.js',
          2 => 'js/jquery.equalheights.js',
          3 => 'js/jquery.mobilemenu.js',
          4 => 'js/tmStickUp.js',
          5 => 'js/jquery-ui-1.10.3.custom.min.js',
          6 => 'js/jquery.placeholder.js',
          7 => 'js/owl.carousel.js',
          8 => 'js/custom.js',
          9 => 'js/jquery.datetimepicker.full.min.js',
        ),
        'regions' => 
        array (
          'highlighted' => 'Highlighted',
          'sidebar_first' => 'Left sidebar',
          'sidebar_second' => 'Right sidebar',
          'content' => 'Content',
          'content_top' => 'Content Top',
          'content_second' => 'Content second',
          'header' => 'Header',
          'footer_top' => 'Footer Top',
          'footer_bottom' => 'Footer Bottom',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'hide_content_in_front' => '1',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/angiaphat/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.51',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1475694174',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.51',
    ),
  ),
);
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];

# Local non-aegir-generated additions.
@include_once('/var/aegir/platforms/angiaphat/sites/angiaphat2.phanmemquanli.com/local.drushrc.php');
