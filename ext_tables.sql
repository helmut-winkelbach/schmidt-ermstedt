#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    tx_bootstrappackage_timeline_item int(11) unsigned DEFAULT '0',
    tx_bootstrappackage_accordion_item int(11) unsigned DEFAULT '0',
);

# Table structure for table 'tx_bootstrappackage_timeline_item'
#
CREATE TABLE tx_bootstrappackage_timeline_item (
    tt_content int(11) unsigned DEFAULT '0',
    date datetime,
    header varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
    icon_set varchar(255) DEFAULT '' NOT NULL,
    icon_identifier varchar(255) DEFAULT '' NOT NULL,
    icon_file int(11) unsigned DEFAULT '0',
    image int(11) unsigned DEFAULT '0',
);

# Table structure for table 'tx_bootstrappackage_accordion_item'
#
CREATE TABLE tx_bootstrappackage_accordion_item (
    tt_content int(11) unsigned DEFAULT '0',
    header varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
    media int(11) unsigned DEFAULT '0',
    mediaorient varchar(60) DEFAULT 'left' NOT NULL,
    imagecols tinyint(4) unsigned DEFAULT '1' NOT NULL,
    image_zoom tinyint(3) unsigned DEFAULT '0' NOT NULL,
);
