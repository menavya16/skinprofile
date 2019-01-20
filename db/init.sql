-- init.sql

DROP DATABASE IF EXISTS skinprofiledb;
CREATE DATABASE skinprofiledb;

USE skinprofiledb;

-- create tables
CREATE TABLE USERS(
  uname VARCHAR(100) NOT NULL PRIMARY KEY,
  password VARCHAR(100) NOT NULL,
  budget TEXT NOT NULL,
  phone INT NOT NULL
);

CREATE TABLE AVOID_ING(
  concern VARCHAR(200) NOT NULL,
  ing VARCHAR(200)
);


CREATE TABLE USER_CONCERNS(
  uname VARCHAR(100) NOT NULL,
  concern VARCHAR(200) NOT NULL,
  FOREIGN KEY (uname) REFERENCES USERS(uname) ON DELETE CASCADE
);


INSERT INTO AVOID_ING (concern, ing) VALUES (
  'eczema',
  'sulfate'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'eczema',
  'retinoid'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'eczema',
  'glycolic'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'eczema',
  'alcohol'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'acne',
  'salicylic acid'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'acne',
  'lanolin'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'acne',
  'algae'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'acne',
  'camphor'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'wrinkles',
  'sulfate'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'wrinkles',
  'alcohol'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'rosacea',
  'glycolic'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'rosacea',
  'witch hazel'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'psoriasis',
  'coal tar'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'psoriasis',
  'lithium'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'blackhead',
  'lanolin'
);

INSERT INTO AVOID_ING (concern, ing) VALUES (
  'blackhead',
  'benzaldehyde'
);
