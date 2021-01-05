<?php
/**
 * Additional settings to add to ManageWikiNamespaces are added using the variable below.
 *
 * Type can be one of:
 *
 * check: adds a checkbox. Format: $var[] = $namespace_id;
 * text: adds a single line text entry. Format: [$var][$namespace_id] = $val;
 * vestyle: adds a checkbox. Format: [$var][$namespace_id] = true;
 *
 * Other variables that are required are name and from.
 *
 * name: the displayed name of the setting on Special:ManageWiki.
 * from: a text entry of which extension is required for this setting to work. If added by MediaWiki or a 'global' extension, use 'mediawiki'.
 * main: true or false. If false, this config will not appear for main namespaces.
 * talk: true or false. If false, this config will not appear for talk namespaces.
 * blacklisted: array of namespace ids to blacklist the config from.
 * overridedefault: override default when no existing value exist. Can be a boolean, string, or array.
 * overridedefault[$namespace_id => $val]: namespace specific overrides. Also required a default key. See below.
 * overridedefault['default' => $val]: required when using namespace specific overrides. Sets a default for all other namespaces, which is not using the overrides set.
 * requires: an array, string, or integer. See below for available types that can be used here.
 *
 * 'requires' can be one of:
 *
 * articles: max integer amount of articles a wiki may have in order to be able to modify this setting.
 * extensions: array of extensions that must be enabled in order to modify this setting. Different from 'from'. Only use if requires more then one extension.
 * pages: max integer amount of pages a wiki may have in order to be able to modify this setting.
 * permissions: array of permissions a user must have to be able to modify this setting. Regardless of this value, a user must always have the managewiki permission.
 * visibility: can be either 'private' or 'public'. If set to 'private' this setting will only appear on private wikis. If set to 'public' it will only appear on public wikis.
 */

$wgManageWikiNamespacesAdditional = [
	'wgExtraSignatureNamespaces' => [
		'name' => 'Enable "Signature" button on the edit toolbar under both main and talk pages.',
		'type' => 'check',
		'from' => 'mediawiki',
		'main' => true,
		'talk' => false,
		'blacklisted' => [],
		'overridedefault' => false,
		'requires' => [],
	],
	'wgCapitalLinkOverrides' => [
		'name' => 'Force the first letter of links to capitals. Overrides $wgCapitalLinks for this namespace.',
		'type' => 'vestyle',
		'from' => 'mediawiki',
		'main' => true,
		'talk' => false,
		'blacklisted' => [
			2,
			8,
		],
		'overridedefault' => false,
		'requires' => [],
	],
	'egApprovedRevsEnabledNamespaces' => [
		'name' => 'Enable ApprovedRevs in this namespace?',
		'type' => 'vestyle',
		'from' => 'approvedrevs',
		'main' => true,
		'talk' => true,
		'blacklisted' => [
			8,
			9,
			14,
			15,
		],
		'overridedefault' => true,
		'requires' => [],
	],
	'wgWPBNamespaces' => [
		'name' => 'Enable WikidataPageBanner in this namespace?',
		'type' => 'check',
		'from' => 'wikidatapagebanner',
		'main' => true,
		'talk' => true,
		'blacklisted' => [],
		'overridedefault' => false,
		'requires' => [],
	],
	'wgCommentStreamsAllowedNamespaces' => [
		'name' => 'Can comments appear in this namespace?',
		'type' => 'check',
		'from' => 'commentstreams',
		'main' => true,
		'talk' => true,
		'blacklisted' => [],
		'overridedefault' => null,
		'requires' => [],
	],
	'wgFlaggedRevsNamespaces' => [
		'name' => 'Enable FlaggedRevs in this namespace?',
		'type' => 'check',
		'from' => 'flaggedrevs',
		'main' => true,
		'talk' => false,
		'blacklisted' => [ 8 ],
		'overridedefault' => false,
		'requires' => [],
	],
	'wgVisualEditorAvailableNamespaces' => [
		'name' => 'Enable VisualEditor in this namespace?',
		'type' => 'vestyle',
		'from' => 'visualeditor',
		'main' => true,
		'talk' => true,
		'blacklisted' => [],
		'overridedefault' => false,
		'requires' => [],
	],
	'wgNamespacesToPostIn' => [
		'name' => 'Can MassMessage post messages in this namespace?',
		'type' => 'check',
		'from' => 'massmessage',
		'main' => true,
		'talk' => false,
		'blacklisted' => [],
		'overridedefault' => false,
		'requires' => [],
	],
	'wgTemplateSandboxEditNamespaces' => [
		'name' => 'Can TemplateSandbox be used in this namespace?',
		'type' => 'check',
		'from' => 'templatesandbox',
		'main' => true,
		'talk' => true,
		'blacklisted' => [],
		'overridedefault' => false,
		'requires' => [],
	],
	'wgPreloaderSource' => [
		'name' => 'Name of the page (including page\'s namespace) to use as the source for Preloader in this namespace. ($wgPreloaderSource)',
		'type' => 'text',
		'from' => 'preloader',
		'main' => true,
		'talk' => false,
		'blacklisted' => [],
		'overridedefault' => [
			0 => 'Template:Boilerplate',
			'default' => false,
		],
		'requires' => [],
	],
];
