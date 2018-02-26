-- Database setup

CREATE DATABASE IF NOT EXISTS RDC;
USE RDC;

GRANT ALL ON RDC.* TO test@localhost IDENTIFIED BY 'test';

SET NAMES utf8;


-- Create tables

DROP TABLE IF EXISTS contact_address;
CREATE TABLE contact_adress (
    `companyName` VARCHAR(100),
    `street` VARCHAR(100),
    `postalcode` VARCHAR(100),
    `city` VARCHAR(100),
    `state` VARCHAR(100),
    `country` VARCHAR(100),
    `telephone` VARCHAR(100),
    `email` VARCHAR(100)
);

DROP TABLE IF EXISTS contact_mail_config;
CREATE TABLE contact_mail_config (
    `reciever` VARCHAR(100),
    `sender` VARCHAR(100),
    `sendername` VARCHAR(100),
    `counsubject` VARCHAR(255),
    `telephone` VARCHAR(100)
);

DROP TABLE IF EXISTS contact_messages;
CREATE TABLE contact_messages (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `sender` VARCHAR(100),
    `reciever` VARCHAR(100),
    `name` VARCHAR(100),
    `adress` VARCHAR(100),
    `title` CHAR(50),
    `phoneNumber` VARCHAR(100),
    `company` CHAR(100),
    `subject` VARCHAR(255),
    `message` TEXT,
    `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `deleted` DATETIME
);

DROP TABLE IF EXISTS content;
CREATE TABLE content (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `type` VARCHAR(100),
    `category` VARCHAR(100),
    `subCategory` VARCHAR(100),
    `title` VARCHAR(100),
    `content` TEXT,
    `path` VARCHAR(100),
    `author` VARCHAR(100),
    `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `updated` DATETIME ON UPDATE CURRENT_TIMESTAMP,
    `deleted` DATETIME
);

INSERT INTO `contact_address`(companyName, street, postalcode, city, state, country, telephone, email)
VALUES (
    'Red Diamond Coatings',
    'Test Street 5',
    '12345',
    'TestCity',
    'TestState',
    'USA',
    '1-613-12345',
    'info@rdc.com'
)

DROP TABLE IF EXISTS contentImages;
CREATE TABLE contentImages (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `filename` VARCHAR(100),
    `contentReference` INTEGER,

    FOREIGN KEY (`content`) REFERENCES `content`(`id`)
);

-- Join images to content
SELECT c.*, i.filename FROM content as c
INNER JOIN contentImages as i
ON c.id = i.contentReference;


-- table inserts
INSERT INTO `contentImages`(filename, contentReference) VALUES
('testimage.jpg', 1),
('a-pic.png', 1)
;


DROP TABLE IF EXISTS contentImages;
CREATE TABLE contentImages (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `filename` VARCHAR(100),
    `contentReference` INTEGER,

    FOREIGN KEY (`content`) REFERENCES `content`(`id`)
);

-- Join images to content
SELECT c.*, i.filename FROM content as c
INNER JOIN contentImages as i
ON c.id = i.contentReference;


-- table inserts
INSERT INTO `contentImages`(filename, contentReference) VALUES
('testimage.jpg', 1),
('a-pic.png', 1)
;


DROP TABLE IF EXISTS contentImages;
CREATE TABLE contentImages (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `filename` VARCHAR(100),
    `contentReference` INTEGER,

    FOREIGN KEY (`content`) REFERENCES `content`(`id`)
);

-- Join images to content
SELECT c.*, i.filename FROM content as c
INNER JOIN contentImages as i
ON c.id = i.contentReference;


-- table inserts
INSERT INTO `contentImages`(filename, contentReference) VALUES
('testimage.jpg', 1),
('a-pic.png', 1)
;


DROP TABLE IF EXISTS contentImages;
CREATE TABLE contentImages (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `filename` VARCHAR(100),
    `contentReference` INTEGER,

    FOREIGN KEY (`content`) REFERENCES `content`(`id`)
);

-- Join images to content
SELECT c.*, i.filename FROM content as c
INNER JOIN contentImages as i
ON c.id = i.contentReference;


-- table inserts
INSERT INTO `contentImages`(filename, contentReference) VALUES
('testimage.jpg', 1),
('a-pic.png', 1)
;


INSERT INTO `contact`(sender, reciever, `name`, title, phoneNumber, company, `subject`, message)
VALUES
    ('sender@test.se',
    'reciever@test.se',
    'John Snow',
    'Doc',
    '073-3322444',
    'The awesome comp crop',
    'I need a paintjob on my hollywood sign',
    'Hi, I would like to get my hollywood sign upgraded. When can we make this happen? regards Sender')
;

INSERT INTO `content`(`type`, category, subCategory, title, content)
VALUES
    ('article',
    'research',
    'performance',
    '12+ Year (In-Can) Liquid A2 Product Shelf-Life Test',
    'Re-opened After 12 Years.

    The two images (RIGHT) depict one of six original 1-quart containers of RDC Formula A2 as they appeared when they were reopened in August 2017, with what appears to be some resin (in good condition) floating on the top. This product was originally manufactured and canned in August 2005—12 years prior. These containers had been opened several times over time and were stored indoors under extreme hot and cold environments, with ambient room temperatures ranging from 18°f-160°f for all of the 12 years.

    After water added and shaken.

    The two images (LEFT) depict (above shown) 12 year old RDC Formula A2 after the product was transferred to a new 1-quart paint can, then a small amount of tap water was added and the can was shaken at a local paint outlet. Amazingly all product remained fully usable after 12 years of storage, all of which was actually used in 2017 to create additional test samples now in progress and shown in this presentation. This is unarguably an AMAZING, unmatched discovery. RDC is not aware of any paint or coating company on this planet that can claim (and prove) a 12+ year shelf-life.'),
    ('info', 'products', 'product overview', 'FIRE RETARDANT',
    'RDC is an A-1 Rated Fire Retardant product. As such, in the event of a fire, there is more time to escape without deadly smoke and limited flame spread, resulting in reduced risk of loss of life and property.

    Most A-1 fire rated products are in the range of 15’ of flame spread, with an average 200 smoke rating. RDC had a flame spread of only 3.9’ with ZERO SMOKE. Also, there were no signs of blistering or delamination after the test. '),
    ('info',
    'products',
    'product overview',
    'SIGNIFICANT IMPACT RESISTANCE',
    ' RDC passed this test with NO failure, at the maximum rating of direct impact of 160+ in.lbs. and reverse impact at 160 + in.lbs. For perspective, normally a 20 in. lbs. test result is considered a very good rating for a coating product.

    RDC exhibits amazing resistance to damage from hail, baseballs, golf balls, etc., and is virtually impervious to most hard surface impacts. '),
    ('info',
    'products',
    'product overview',
    'GREEN/WATER-BOURNE',
    ' RDC is an Earth friendly/Green, 100% acrylic, water-bourne product, meeting today’s strict environmental guidelines. It is a nontoxic product with low VOC levels.

    In the future, RDC is hopeful we will be able to replace many current product applications, such as harmful epoxy uses and use of tar-paper for construction use, with our Green coating products. ')
;
