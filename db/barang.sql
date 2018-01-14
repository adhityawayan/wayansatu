/*
Navicat PGSQL Data Transfer

Source Server         : test
Source Server Version : 90606
Source Host           : localhost:5432
Source Database       : dkj_mitrapos
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90606
File Encoding         : 65001

Date: 2017-12-08 22:38:36
*/


-- ----------------------------
-- Table structure for "public"."barang"
-- ----------------------------
DROP TABLE "public"."barang";
CREATE TABLE "public"."barang" (
"id" int4 DEFAULT nextval('barang_id_seq'::regclass) NOT NULL,
"tipe_barang" int4 NOT NULL,
"supplier" int4 NOT NULL,
"section" varchar(255) NOT NULL,
"deskripsi" varchar(255) NOT NULL,
"berat" float8 NOT NULL,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO "public"."barang" VALUES ('3', '3', '4', '90560TP', 'Open Back 4"', '0.543', '2017-11-20 14:00:00', null, null, '4', null);
INSERT INTO "public"."barang" VALUES ('4', '3', '5', '7118', 'TUTUP OPEN BEK 3" X 0,9MM', '0.164', '2017-11-20 14:42:40', null, null, '4', null);

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table "public"."barang"
-- ----------------------------
ALTER TABLE "public"."barang" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Key structure for table "public"."barang"
-- ----------------------------
ALTER TABLE "public"."barang" ADD FOREIGN KEY ("tipe_barang") REFERENCES "public"."tipe_barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."barang" ADD FOREIGN KEY ("supplier") REFERENCES "public"."supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
