/*
Navicat PGSQL Data Transfer

Source Server         : postgres@localhost
Source Server Version : 90603
Source Host           : localhost:5432
Source Database       : dkj-pos
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90603
File Encoding         : 65001

Date: 2017-11-16 16:00:51
*/


-- ----------------------------
-- Sequence structure for "public"."barang_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."barang_id_seq";
CREATE SEQUENCE "public"."barang_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."barang_masuk_detail_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."barang_masuk_detail_id_seq";
CREATE SEQUENCE "public"."barang_masuk_detail_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 2
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."barang_masuk_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."barang_masuk_id_seq";
CREATE SEQUENCE "public"."barang_masuk_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 2
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."customer_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."customer_id_seq";
CREATE SEQUENCE "public"."customer_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."finishing_barang_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."finishing_barang_id_seq";
CREATE SEQUENCE "public"."finishing_barang_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."invoice_distribusi_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."invoice_distribusi_id_seq";
CREATE SEQUENCE "public"."invoice_distribusi_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."menu_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."menu_id_seq";
CREATE SEQUENCE "public"."menu_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 26
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."notifikasi_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."notifikasi_id_seq";
CREATE SEQUENCE "public"."notifikasi_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."pembayaran_distribusi_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."pembayaran_distribusi_id_seq";
CREATE SEQUENCE "public"."pembayaran_distribusi_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."pembayaran_penjualan_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."pembayaran_penjualan_id_seq";
CREATE SEQUENCE "public"."pembayaran_penjualan_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."pengiriman_detail_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."pengiriman_detail_id_seq";
CREATE SEQUENCE "public"."pengiriman_detail_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."pengiriman_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."pengiriman_id_seq";
CREATE SEQUENCE "public"."pengiriman_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."penjualan_detail_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."penjualan_detail_id_seq";
CREATE SEQUENCE "public"."penjualan_detail_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 6
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."penjualan_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."penjualan_id_seq";
CREATE SEQUENCE "public"."penjualan_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 5
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."penyesuaian_harga_detail_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."penyesuaian_harga_detail_id_seq";
CREATE SEQUENCE "public"."penyesuaian_harga_detail_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."penyesuaian_harga_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."penyesuaian_harga_id_seq";
CREATE SEQUENCE "public"."penyesuaian_harga_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."penyesuaian_stok_detail_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."penyesuaian_stok_detail_id_seq";
CREATE SEQUENCE "public"."penyesuaian_stok_detail_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."penyesuaian_stok_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."penyesuaian_stok_id_seq";
CREATE SEQUENCE "public"."penyesuaian_stok_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."perubahan_harga_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."perubahan_harga_id_seq";
CREATE SEQUENCE "public"."perubahan_harga_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."perusahaan_bank_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."perusahaan_bank_id_seq";
CREATE SEQUENCE "public"."perusahaan_bank_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 2
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."purchase_order_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."purchase_order_id_seq";
CREATE SEQUENCE "public"."purchase_order_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."retur_penjualan_detail_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."retur_penjualan_detail_id_seq";
CREATE SEQUENCE "public"."retur_penjualan_detail_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."retur_penjualan_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."retur_penjualan_id_seq";
CREATE SEQUENCE "public"."retur_penjualan_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."s_user_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."s_user_id_seq";
CREATE SEQUENCE "public"."s_user_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."sales_contract_detail_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."sales_contract_detail_id_seq";
CREATE SEQUENCE "public"."sales_contract_detail_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."sales_contract_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."sales_contract_id_seq";
CREATE SEQUENCE "public"."sales_contract_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."setting_pajak_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."setting_pajak_id_seq";
CREATE SEQUENCE "public"."setting_pajak_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."setting_pajak_penjualan_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."setting_pajak_penjualan_id_seq";
CREATE SEQUENCE "public"."setting_pajak_penjualan_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."setting_perusahaan_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."setting_perusahaan_id_seq";
CREATE SEQUENCE "public"."setting_perusahaan_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."status_distribusi_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."status_distribusi_id_seq";
CREATE SEQUENCE "public"."status_distribusi_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 9
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."stok_barang_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."stok_barang_id_seq";
CREATE SEQUENCE "public"."stok_barang_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 2
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."supplier_bank_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."supplier_bank_id_seq";
CREATE SEQUENCE "public"."supplier_bank_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."supplier_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."supplier_id_seq";
CREATE SEQUENCE "public"."supplier_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 2
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."tipe_barang_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."tipe_barang_id_seq";
CREATE SEQUENCE "public"."tipe_barang_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."tipe_user_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."tipe_user_id_seq";
CREATE SEQUENCE "public"."tipe_user_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 2
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."user_privilages_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."user_privilages_id_seq";
CREATE SEQUENCE "public"."user_privilages_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 21
 CACHE 1;

-- ----------------------------
-- Table structure for "public"."_default"
-- ----------------------------
DROP TABLE "public"."_default";
CREATE TABLE "public"."_default" (
"id" int4 NOT NULL,
"name" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of _default
-- ----------------------------

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
INSERT INTO "public"."barang" VALUES ('1', '1', '1', '91911', 'iiiii', '2', '2017-11-15 13:37:50', null, null, '1', null);

-- ----------------------------
-- Table structure for "public"."barang_masuk"
-- ----------------------------
DROP TABLE "public"."barang_masuk";
CREATE TABLE "public"."barang_masuk" (
"id" int4 DEFAULT nextval('barang_masuk_id_seq'::regclass) NOT NULL,
"nomor_transaksi" varchar(255) NOT NULL,
"supplier" int4 NOT NULL,
"tanggal" date NOT NULL,
"nomor_surat_jalan" varchar(255),
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of barang_masuk
-- ----------------------------
INSERT INTO "public"."barang_masuk" VALUES ('1', '17001/DKJ/BM/2017', '1', '2017-10-02', '6666', null, '2017-11-15 13:38:32', null, null, '1', null);
INSERT INTO "public"."barang_masuk" VALUES ('2', '17002/DKJ/BM/2017', '1', '2017-10-01', '9', null, '2017-11-15 14:08:59', null, null, '1', null);

-- ----------------------------
-- Table structure for "public"."barang_masuk_detail"
-- ----------------------------
DROP TABLE "public"."barang_masuk_detail";
CREATE TABLE "public"."barang_masuk_detail" (
"id" int4 DEFAULT nextval('barang_masuk_detail_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"barang" int4 NOT NULL,
"panjang" float8 NOT NULL,
"finish" varchar(255) NOT NULL,
"harga_beli" float8 NOT NULL,
"harga_jual" float8 NOT NULL,
"jumlah" int4 NOT NULL,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of barang_masuk_detail
-- ----------------------------
INSERT INTO "public"."barang_masuk_detail" VALUES ('1', '1', '1', '2', '1', '10000', '15000', '9', '2017-11-15 13:38:32', null, null, '1', null);
INSERT INTO "public"."barang_masuk_detail" VALUES ('2', '2', '1', '44', '1', '88', '55', '11', '2017-11-15 14:08:59', null, null, '1', null);

-- ----------------------------
-- Table structure for "public"."customer"
-- ----------------------------
DROP TABLE "public"."customer";
CREATE TABLE "public"."customer" (
"id" int4 DEFAULT nextval('customer_id_seq'::regclass) NOT NULL,
"nama" varchar(255) NOT NULL,
"alamat" text NOT NULL,
"telepon" varchar(255) NOT NULL,
"fax" varchar(255),
"email" varchar(255),
"contact_person" varchar(255),
"inisial" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO "public"."customer" VALUES ('1', 'Perusahaan', '2423', '234', null, '', null, '', '2017-11-15 16:05:37', null, null, '1', null);

-- ----------------------------
-- Table structure for "public"."finishing_barang"
-- ----------------------------
DROP TABLE "public"."finishing_barang";
CREATE TABLE "public"."finishing_barang" (
"id" int4 DEFAULT nextval('finishing_barang_id_seq'::regclass) NOT NULL,
"finishing" varchar(255) NOT NULL,
"harga" float8 NOT NULL,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of finishing_barang
-- ----------------------------
INSERT INTO "public"."finishing_barang" VALUES ('1', 'fp', '3000', '2017-11-15 13:37:23', null, null, '1', null);

-- ----------------------------
-- Table structure for "public"."invoice_distribusi"
-- ----------------------------
DROP TABLE "public"."invoice_distribusi";
CREATE TABLE "public"."invoice_distribusi" (
"id" int4 DEFAULT nextval('invoice_distribusi_id_seq'::regclass) NOT NULL,
"parent" int4,
"nomor_tranaksi" varchar(255) NOT NULL,
"tanggal" timestamp(6) NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of invoice_distribusi
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."menu"
-- ----------------------------
DROP TABLE "public"."menu";
CREATE TABLE "public"."menu" (
"id" int4 DEFAULT nextval('menu_id_seq'::regclass) NOT NULL,
"menu" varchar(255) NOT NULL,
"index" int4 NOT NULL,
"parent" int4,
"url" varchar(255),
"icon" varchar(255),
"color" varchar(255),
"id_element" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO "public"."menu" VALUES ('1', ' User', '1', null, 'dashboard/route/1', 'fa fa-user', 'red-thunderbird', null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('2', 'Type User', '1', '1', 'Type_user', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('3', 'User', '1', '1', 'S_user', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('6', 'Library', '1', null, 'dashboard/route/6', 'fa fa-book', 'blue-madison', null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('7', 'Inventory', '1', null, 'dashboard/route/7', 'fa fa-archive', 'green-seagreen', null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('9', 'Supplier', '1', '6', 'Supplier', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('10', 'Tipe Barang', '1', '6', 'Tipe_barang', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('11', 'Barang', '1', '6', 'Barang', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('12', 'Finishing', '1', '6', 'Finishing_barang', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('14', 'Stok Barang', '1', '7', 'Stok_barang', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('15', 'Barang Masuk', '1', '7', 'Barang_masuk', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('16', 'Penyesuaian Stok', '1', '7', 'Penyesuaian_stok', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('17', 'Penyesuaian Harga', '1', '7', 'Penyesuaian_harga', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('19', 'Customer', '1', null, 'dashboard/route/19', 'fa fa-users', 'grey-salsa', null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('20', 'Customer', '1', '19', 'Customer', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('22', 'Toko', '1', null, 'dashboard/route/22', 'fa fa-home', 'yellow-lemon', null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('23', 'Penjualan', '1', '22', 'Penjualan', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('24', 'Setting', '1', null, 'dashboard/route/24', 'fa fa-cog', 'grey-gallery', null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('25', 'Perusahaan', '1', '24', 'Setting_perusahaan/form', null, null, null, null, null, null, null, null);
INSERT INTO "public"."menu" VALUES ('26', 'Distribusi', '1', null, 'dashboard/route/26', 'fa fa-truck', 'blue-oleo', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for "public"."migrations"
-- ----------------------------
DROP TABLE "public"."migrations";
CREATE TABLE "public"."migrations" (
"version" int8 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO "public"."migrations" VALUES ('37');

-- ----------------------------
-- Table structure for "public"."notifikasi"
-- ----------------------------
DROP TABLE "public"."notifikasi";
CREATE TABLE "public"."notifikasi" (
"id" int4 DEFAULT nextval('notifikasi_id_seq'::regclass) NOT NULL,
"text" varchar(255) NOT NULL,
"referensi" varchar(255) NOT NULL,
"referensi_id" int4,
"link" varchar(255),
"status" int4,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of notifikasi
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."pembayaran_distribusi"
-- ----------------------------
DROP TABLE "public"."pembayaran_distribusi";
CREATE TABLE "public"."pembayaran_distribusi" (
"id" int4 DEFAULT nextval('pembayaran_distribusi_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"nomor_tranaksi" varchar(255),
"tanggal" timestamp(6) NOT NULL,
"nominal" float8 NOT NULL,
"pembayaran_melalui" int4 NOT NULL,
"status" int4 NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of pembayaran_distribusi
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."pembayaran_penjualan"
-- ----------------------------
DROP TABLE "public"."pembayaran_penjualan";
CREATE TABLE "public"."pembayaran_penjualan" (
"id" int4 DEFAULT nextval('pembayaran_penjualan_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"nomor_transaksi" varchar(255) NOT NULL,
"tanggal" timestamp(6) NOT NULL,
"nominal" float8 NOT NULL,
"pembayaran_melalui" int4 NOT NULL,
"status" int4 NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of pembayaran_penjualan
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."pengiriman"
-- ----------------------------
DROP TABLE "public"."pengiriman";
CREATE TABLE "public"."pengiriman" (
"id" int4 DEFAULT nextval('pengiriman_id_seq'::regclass) NOT NULL,
"supplier" int4 NOT NULL,
"tanggal_kirim" timestamp(6) NOT NULL,
"tujuan_pengiriman" varchar(255),
"nomor_surat_jalan" varchar(255) NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of pengiriman
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."pengiriman_detail"
-- ----------------------------
DROP TABLE "public"."pengiriman_detail";
CREATE TABLE "public"."pengiriman_detail" (
"id" int4 DEFAULT nextval('pengiriman_detail_id_seq'::regclass) NOT NULL,
"parent" int4,
"sales_contract_id" int4,
"sales_contract_detail_id" int4,
"jumlah_kirim" int4,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of pengiriman_detail
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."penjualan"
-- ----------------------------
DROP TABLE "public"."penjualan";
CREATE TABLE "public"."penjualan" (
"id" int4 DEFAULT nextval('penjualan_id_seq'::regclass) NOT NULL,
"nomor_transaksi" varchar(255) NOT NULL,
"customer" int4 NOT NULL,
"tanggal" timestamp(6) NOT NULL,
"total" float8,
"diskon" float8,
"diskon_type" int4,
"ppn" float8,
"grand_total" float8,
"jenis_pembayaran" int4,
"term_of_payment" char(4),
"nama_bank" varchar(255),
"nomor_akun" varchar(255),
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of penjualan
-- ----------------------------
INSERT INTO "public"."penjualan" VALUES ('1', '17001/DKJ/PJ/2017', '1', '2017-11-15 00:00:00', '75000', '0', '1', null, '75000', '1', '    ', '2', '', '', '2017-11-15 16:05:52', null, null, '1', null);
INSERT INTO "public"."penjualan" VALUES ('2', '17002/DKJ/PJ/2017', '1', '2017-11-15 00:00:00', '45000', '0', '1', null, '45000', '1', '    ', '', '', '', '2017-11-15 16:06:21', null, null, '1', null);
INSERT INTO "public"."penjualan" VALUES ('3', '17003/DKJ/PJ/2017', '1', '2017-11-15 00:00:00', '45000', '0', '1', null, '45000', '1', '    ', '', '', '', '2017-11-15 16:08:07', null, null, '1', null);
INSERT INTO "public"."penjualan" VALUES ('4', '17004/DKJ/PJ/2017', '1', '2017-11-15 00:00:00', '75000', '0', '1', null, '75000', '1', '    ', '', '', '', '2017-11-15 16:13:50', null, null, '1', null);
INSERT INTO "public"."penjualan" VALUES ('5', '17005/DKJ/PJ/2017', '1', '2017-11-15 00:00:00', '30055', '0', '1', null, '30055', '1', '    ', '', '', '', '2017-11-15 19:21:02', null, null, '1', null);

-- ----------------------------
-- Table structure for "public"."penjualan_detail"
-- ----------------------------
DROP TABLE "public"."penjualan_detail";
CREATE TABLE "public"."penjualan_detail" (
"id" int4 DEFAULT nextval('penjualan_detail_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"barang" int4 NOT NULL,
"panjang" float8 NOT NULL,
"finishing" varchar(255) NOT NULL,
"harga" float8 NOT NULL,
"stok" int4 NOT NULL,
"jumlah" int4 NOT NULL,
"total" float8 NOT NULL,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of penjualan_detail
-- ----------------------------
INSERT INTO "public"."penjualan_detail" VALUES ('1', '1', '1', '2', 'fp', '15000', '9', '5', '75000', '2017-11-15 16:05:52', null, null, '1', null);
INSERT INTO "public"."penjualan_detail" VALUES ('2', '2', '1', '2', 'fp', '15000', '9', '3', '45000', '2017-11-15 16:06:21', null, null, '1', null);
INSERT INTO "public"."penjualan_detail" VALUES ('3', '3', '1', '2', 'fp', '15000', '9', '3', '45000', '2017-11-15 16:08:07', null, null, '1', null);
INSERT INTO "public"."penjualan_detail" VALUES ('4', '4', '1', '2', 'fp', '15000', '9', '5', '75000', '2017-11-15 16:13:50', null, null, '1', null);
INSERT INTO "public"."penjualan_detail" VALUES ('5', '5', '1', '44', 'fp', '55', '11', '1', '55', '2017-11-15 19:21:02', null, null, '1', null);
INSERT INTO "public"."penjualan_detail" VALUES ('6', '5', '1', '2', 'fp', '15000', '4', '2', '30000', '2017-11-15 19:21:02', null, null, '1', null);

-- ----------------------------
-- Table structure for "public"."penyesuaian_harga"
-- ----------------------------
DROP TABLE "public"."penyesuaian_harga";
CREATE TABLE "public"."penyesuaian_harga" (
"id" int4 DEFAULT nextval('penyesuaian_harga_id_seq'::regclass) NOT NULL,
"nomor_transaksi" varchar(255) NOT NULL,
"tanggal" date NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of penyesuaian_harga
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."penyesuaian_harga_detail"
-- ----------------------------
DROP TABLE "public"."penyesuaian_harga_detail";
CREATE TABLE "public"."penyesuaian_harga_detail" (
"id" int4 DEFAULT nextval('penyesuaian_harga_detail_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"barang" int4 NOT NULL,
"panjang" float8 NOT NULL,
"finish" varchar(255) NOT NULL,
"harga_sebelum" float8 NOT NULL,
"harga_koreksi" float8 NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of penyesuaian_harga_detail
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."penyesuaian_stok"
-- ----------------------------
DROP TABLE "public"."penyesuaian_stok";
CREATE TABLE "public"."penyesuaian_stok" (
"id" int4 DEFAULT nextval('penyesuaian_stok_id_seq'::regclass) NOT NULL,
"nomor_transaksi" varchar(255) NOT NULL,
"tanggal" date NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of penyesuaian_stok
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."penyesuaian_stok_detail"
-- ----------------------------
DROP TABLE "public"."penyesuaian_stok_detail";
CREATE TABLE "public"."penyesuaian_stok_detail" (
"id" int4 DEFAULT nextval('penyesuaian_stok_detail_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"barang" int4 NOT NULL,
"panjang" float8 NOT NULL,
"finish" varchar(255) NOT NULL,
"stok_sebelum" int4 NOT NULL,
"stok_koreksi" int4 NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of penyesuaian_stok_detail
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."perubahan_harga"
-- ----------------------------
DROP TABLE "public"."perubahan_harga";
CREATE TABLE "public"."perubahan_harga" (
"id" int4 DEFAULT nextval('perubahan_harga_id_seq'::regclass) NOT NULL,
"transaksi" varchar(255) NOT NULL,
"nomor_transaksi" varchar(255),
"barang" int4 NOT NULL,
"panjang" float8 NOT NULL,
"finish" varchar(255) NOT NULL,
"harga_sebelum" float8 NOT NULL,
"harga_koreksi" float8 NOT NULL,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of perubahan_harga
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."perusahaan_bank"
-- ----------------------------
DROP TABLE "public"."perusahaan_bank";
CREATE TABLE "public"."perusahaan_bank" (
"id" int4 DEFAULT nextval('perusahaan_bank_id_seq'::regclass) NOT NULL,
"nama_akun" varchar(255),
"bank" varchar(255),
"nomor_akun" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of perusahaan_bank
-- ----------------------------
INSERT INTO "public"."perusahaan_bank" VALUES ('1', 'Suwitro', 'Mandiri', '9878798798', null, null, null, null, null);
INSERT INTO "public"."perusahaan_bank" VALUES ('2', 'Suwitro', 'BCA', '2342335345', null, null, null, null, null);

-- ----------------------------
-- Table structure for "public"."purchase_order"
-- ----------------------------
DROP TABLE "public"."purchase_order";
CREATE TABLE "public"."purchase_order" (
"id" int4 DEFAULT nextval('purchase_order_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"nomor_transaksi" varchar,
"tanggal" timestamp(6) NOT NULL,
"up" int4,
"telepon" int4,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of purchase_order
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."retur_penjualan"
-- ----------------------------
DROP TABLE "public"."retur_penjualan";
CREATE TABLE "public"."retur_penjualan" (
"id" int4 DEFAULT nextval('retur_penjualan_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"nomor_transaksi" varchar(255) NOT NULL,
"tanggal" timestamp(6) NOT NULL,
"status" int4 NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of retur_penjualan
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."retur_penjualan_detail"
-- ----------------------------
DROP TABLE "public"."retur_penjualan_detail";
CREATE TABLE "public"."retur_penjualan_detail" (
"id" int4 DEFAULT nextval('retur_penjualan_detail_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"parent_detail" int4 NOT NULL,
"jumlah_beli" int4 NOT NULL,
"jumlah_retur" int4 NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of retur_penjualan_detail
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."s_user"
-- ----------------------------
DROP TABLE "public"."s_user";
CREATE TABLE "public"."s_user" (
"id" int4 DEFAULT nextval('s_user_id_seq'::regclass) NOT NULL,
"tipe" int4 NOT NULL,
"nama" varchar(255) NOT NULL,
"telepon" varchar(255),
"username" varchar(255) NOT NULL,
"password" varchar(255) NOT NULL,
"foto" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of s_user
-- ----------------------------
INSERT INTO "public"."s_user" VALUES ('1', '1', 'Administrator', null, 'beheerder', '$2y$10$oe36uixTBiJ4FQhDchbOPuN0dESx2kB17oF113GdflIHBMbDH5FB2', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for "public"."sales_contract"
-- ----------------------------
DROP TABLE "public"."sales_contract";
CREATE TABLE "public"."sales_contract" (
"id" int4 DEFAULT nextval('sales_contract_id_seq'::regclass) NOT NULL,
"nomor_do" varchar(255) NOT NULL,
"customer" int4 NOT NULL,
"supplier" int4,
"nomor_sc" varchar(255) NOT NULL,
"tanggal" timestamp(6) NOT NULL,
"nomor_pesanan" varchar(255),
"tanggal_disetujui" timestamp(6),
"status" int4 NOT NULL,
"catatan" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of sales_contract
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."sales_contract_detail"
-- ----------------------------
DROP TABLE "public"."sales_contract_detail";
CREATE TABLE "public"."sales_contract_detail" (
"id" int4 DEFAULT nextval('sales_contract_detail_id_seq'::regclass) NOT NULL,
"parent" int4 NOT NULL,
"barang" int4 NOT NULL,
"harga_dasar" float8 NOT NULL,
"panjang" float8 NOT NULL,
"finishing" varchar(255) NOT NULL,
"harga_finishing" float8 NOT NULL,
"ppn_status" int4 NOT NULL,
"qty_order" int4 NOT NULL,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of sales_contract_detail
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."setting_pajak"
-- ----------------------------
DROP TABLE "public"."setting_pajak";
CREATE TABLE "public"."setting_pajak" (
"id" int4 DEFAULT nextval('setting_pajak_id_seq'::regclass) NOT NULL,
"pajak" varchar(255),
"value" float8,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of setting_pajak
-- ----------------------------
INSERT INTO "public"."setting_pajak" VALUES ('1', 'PPN', '10', null, null, null, null, null);

-- ----------------------------
-- Table structure for "public"."setting_pajak_penjualan"
-- ----------------------------
DROP TABLE "public"."setting_pajak_penjualan";
CREATE TABLE "public"."setting_pajak_penjualan" (
"id" int4 DEFAULT nextval('setting_pajak_penjualan_id_seq'::regclass) NOT NULL,
"status" char(1),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of setting_pajak_penjualan
-- ----------------------------
INSERT INTO "public"."setting_pajak_penjualan" VALUES ('1', '0', null, null, null, null, null);

-- ----------------------------
-- Table structure for "public"."setting_perusahaan"
-- ----------------------------
DROP TABLE "public"."setting_perusahaan";
CREATE TABLE "public"."setting_perusahaan" (
"id" int4 DEFAULT nextval('setting_perusahaan_id_seq'::regclass) NOT NULL,
"nama_perusahaan" varchar(255) NOT NULL,
"alamat" varchar(255) NOT NULL,
"telepon" varchar(255) NOT NULL,
"fax" varchar(255),
"email" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of setting_perusahaan
-- ----------------------------
INSERT INTO "public"."setting_perusahaan" VALUES ('1', 'PT. DWI KREASI JAYA', 'Royal Residence B2-100 Raya Babatan, Wiyung, Surabaya', '087701111077', '', 'dwikreasijaya@gmail.com', null, null, null, null, null);

-- ----------------------------
-- Table structure for "public"."status_distribusi"
-- ----------------------------
DROP TABLE "public"."status_distribusi";
CREATE TABLE "public"."status_distribusi" (
"id" int4 DEFAULT nextval('status_distribusi_id_seq'::regclass) NOT NULL,
"status" varchar(255) NOT NULL,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of status_distribusi
-- ----------------------------
INSERT INTO "public"."status_distribusi" VALUES ('1', 'Penawaran diajukan', null, null, null, null, null);
INSERT INTO "public"."status_distribusi" VALUES ('2', 'Penawaran dikonfirmasi', null, null, null, null, null);
INSERT INTO "public"."status_distribusi" VALUES ('3', 'Kirim PO ke Supplier', null, null, null, null, null);
INSERT INTO "public"."status_distribusi" VALUES ('4', 'PO diproses Supplier', null, null, null, null, null);
INSERT INTO "public"."status_distribusi" VALUES ('5', 'Sebagian barang terkirim', null, null, null, null, null);
INSERT INTO "public"."status_distribusi" VALUES ('6', 'Barang telah terkirim', null, null, null, null, null);
INSERT INTO "public"."status_distribusi" VALUES ('7', 'Lunas', null, null, null, null, null);
INSERT INTO "public"."status_distribusi" VALUES ('8', 'Closed', null, null, null, null, null);
INSERT INTO "public"."status_distribusi" VALUES ('9', 'Dibatalkan', null, null, null, null, null);

-- ----------------------------
-- Table structure for "public"."stok_barang"
-- ----------------------------
DROP TABLE "public"."stok_barang";
CREATE TABLE "public"."stok_barang" (
"id" int4 DEFAULT nextval('stok_barang_id_seq'::regclass) NOT NULL,
"barang" int4 NOT NULL,
"panjang" float8 NOT NULL,
"finish" varchar(255) NOT NULL,
"harga" float8,
"stok" int4,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of stok_barang
-- ----------------------------
INSERT INTO "public"."stok_barang" VALUES ('1', '1', '2', '1', '15000', '2', '2017-11-15 13:38:32', '2017-11-15 19:21:02', null, '1', '1');
INSERT INTO "public"."stok_barang" VALUES ('2', '1', '44', '1', '55', '10', '2017-11-15 14:08:59', '2017-11-15 19:21:02', null, '1', '1');

-- ----------------------------
-- Table structure for "public"."supplier"
-- ----------------------------
DROP TABLE "public"."supplier";
CREATE TABLE "public"."supplier" (
"id" int4 DEFAULT nextval('supplier_id_seq'::regclass) NOT NULL,
"nama" varchar(255) NOT NULL,
"alamat" varchar(255) NOT NULL,
"telepon" varchar(255) NOT NULL,
"fax" varchar(255),
"email" varchar(255),
"contact_person" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO "public"."supplier" VALUES ('1', '999', '98798', '65', null, '543@utuyt.vvv', '', '2017-11-15 13:36:53', null, null, '1', null);
INSERT INTO "public"."supplier" VALUES ('2', 'Perusahaan', 'alamat', '7688979', null, '', '', '2017-11-16 12:25:55', null, null, '1', null);

-- ----------------------------
-- Table structure for "public"."supplier_bank"
-- ----------------------------
DROP TABLE "public"."supplier_bank";
CREATE TABLE "public"."supplier_bank" (
"id" int4 DEFAULT nextval('supplier_bank_id_seq'::regclass) NOT NULL,
"supplier" int4 NOT NULL,
"nama" varchar(255) NOT NULL,
"nomor" varchar(255) NOT NULL,
"cabang" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of supplier_bank
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."tipe_barang"
-- ----------------------------
DROP TABLE "public"."tipe_barang";
CREATE TABLE "public"."tipe_barang" (
"id" int4 DEFAULT nextval('tipe_barang_id_seq'::regclass) NOT NULL,
"tipe_barang" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tipe_barang
-- ----------------------------
INSERT INTO "public"."tipe_barang" VALUES ('1', '777', '2017-11-15 13:37:06', null, null, '1', null);

-- ----------------------------
-- Table structure for "public"."tipe_user"
-- ----------------------------
DROP TABLE "public"."tipe_user";
CREATE TABLE "public"."tipe_user" (
"id" int4 DEFAULT nextval('tipe_user_id_seq'::regclass) NOT NULL,
"tipe_user" varchar(255),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tipe_user
-- ----------------------------
INSERT INTO "public"."tipe_user" VALUES ('1', 'Admin', null, null, null, null, null);
INSERT INTO "public"."tipe_user" VALUES ('2', 'Kasir', null, null, null, null, null);

-- ----------------------------
-- Table structure for "public"."user_privilages"
-- ----------------------------
DROP TABLE "public"."user_privilages";
CREATE TABLE "public"."user_privilages" (
"id" int4 DEFAULT nextval('user_privilages_id_seq'::regclass) NOT NULL,
"tipe_user" int4 NOT NULL,
"menu" int4 NOT NULL,
"create" int4,
"read" int4,
"update" int4,
"delete" int4,
"last_login" timestamp(6),
"created_at" timestamp(6),
"updated_at" timestamp(6),
"deleted_at" timestamp(6),
"created_by" int4,
"updated_by" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of user_privilages
-- ----------------------------
INSERT INTO "public"."user_privilages" VALUES ('1', '1', '2', '1', '1', '0', '0', null, '2017-11-14 13:52:12', '2017-11-15 20:39:11', null, '1', '1');
INSERT INTO "public"."user_privilages" VALUES ('5', '1', '9', '0', '1', '0', '0', null, null, '2017-11-15 20:39:11', null, null, '1');
INSERT INTO "public"."user_privilages" VALUES ('6', '1', '10', '0', '1', '0', '0', null, null, '2017-11-15 20:39:11', null, null, '1');
INSERT INTO "public"."user_privilages" VALUES ('7', '1', '11', '0', '1', '0', '0', null, null, '2017-11-15 20:39:11', null, null, '1');
INSERT INTO "public"."user_privilages" VALUES ('9', '1', '12', '0', '1', '0', '0', null, null, '2017-11-15 20:39:11', null, null, '1');
INSERT INTO "public"."user_privilages" VALUES ('14', '1', '14', '0', '1', '0', '0', null, null, '2017-11-15 20:39:11', null, null, '1');
INSERT INTO "public"."user_privilages" VALUES ('15', '1', '15', '0', '1', '0', '0', null, null, '2017-11-15 20:39:11', null, null, '1');
INSERT INTO "public"."user_privilages" VALUES ('16', '1', '16', '0', '1', '0', '0', null, null, '2017-11-15 20:39:11', null, null, '1');
INSERT INTO "public"."user_privilages" VALUES ('17', '1', '17', '0', '1', '0', '0', null, null, '2017-11-15 20:39:11', null, null, '1');
INSERT INTO "public"."user_privilages" VALUES ('18', '1', '3', '0', '1', '0', '0', null, '2017-11-15 20:22:48', '2017-11-15 20:39:11', null, '1', '1');
INSERT INTO "public"."user_privilages" VALUES ('19', '1', '20', '0', '1', '0', '0', null, '2017-11-15 20:22:48', '2017-11-15 20:39:11', null, '1', '1');
INSERT INTO "public"."user_privilages" VALUES ('20', '1', '23', '0', '1', '0', '0', null, '2017-11-15 20:25:32', '2017-11-15 20:39:11', null, '1', '1');
INSERT INTO "public"."user_privilages" VALUES ('21', '1', '25', '0', '1', '0', '0', null, '2017-11-15 20:39:11', null, null, '1', null);

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------
ALTER SEQUENCE "public"."barang_id_seq" OWNED BY "barang"."id";
ALTER SEQUENCE "public"."barang_masuk_detail_id_seq" OWNED BY "barang_masuk_detail"."id";
ALTER SEQUENCE "public"."barang_masuk_id_seq" OWNED BY "barang_masuk"."id";
ALTER SEQUENCE "public"."customer_id_seq" OWNED BY "customer"."id";
ALTER SEQUENCE "public"."finishing_barang_id_seq" OWNED BY "finishing_barang"."id";
ALTER SEQUENCE "public"."invoice_distribusi_id_seq" OWNED BY "invoice_distribusi"."id";
ALTER SEQUENCE "public"."menu_id_seq" OWNED BY "menu"."id";
ALTER SEQUENCE "public"."notifikasi_id_seq" OWNED BY "notifikasi"."id";
ALTER SEQUENCE "public"."pembayaran_distribusi_id_seq" OWNED BY "pembayaran_distribusi"."id";
ALTER SEQUENCE "public"."pembayaran_penjualan_id_seq" OWNED BY "pembayaran_penjualan"."id";
ALTER SEQUENCE "public"."pengiriman_detail_id_seq" OWNED BY "pengiriman_detail"."id";
ALTER SEQUENCE "public"."pengiriman_id_seq" OWNED BY "pengiriman"."id";
ALTER SEQUENCE "public"."penjualan_detail_id_seq" OWNED BY "penjualan_detail"."id";
ALTER SEQUENCE "public"."penjualan_id_seq" OWNED BY "penjualan"."id";
ALTER SEQUENCE "public"."penyesuaian_harga_detail_id_seq" OWNED BY "penyesuaian_harga_detail"."id";
ALTER SEQUENCE "public"."penyesuaian_harga_id_seq" OWNED BY "penyesuaian_harga"."id";
ALTER SEQUENCE "public"."penyesuaian_stok_detail_id_seq" OWNED BY "penyesuaian_stok_detail"."id";
ALTER SEQUENCE "public"."penyesuaian_stok_id_seq" OWNED BY "penyesuaian_stok"."id";
ALTER SEQUENCE "public"."perubahan_harga_id_seq" OWNED BY "perubahan_harga"."id";
ALTER SEQUENCE "public"."perusahaan_bank_id_seq" OWNED BY "perusahaan_bank"."id";
ALTER SEQUENCE "public"."purchase_order_id_seq" OWNED BY "purchase_order"."id";
ALTER SEQUENCE "public"."retur_penjualan_detail_id_seq" OWNED BY "retur_penjualan_detail"."id";
ALTER SEQUENCE "public"."retur_penjualan_id_seq" OWNED BY "retur_penjualan"."id";
ALTER SEQUENCE "public"."s_user_id_seq" OWNED BY "s_user"."id";
ALTER SEQUENCE "public"."sales_contract_detail_id_seq" OWNED BY "sales_contract_detail"."id";
ALTER SEQUENCE "public"."sales_contract_id_seq" OWNED BY "sales_contract"."id";
ALTER SEQUENCE "public"."setting_pajak_id_seq" OWNED BY "setting_pajak"."id";
ALTER SEQUENCE "public"."setting_pajak_penjualan_id_seq" OWNED BY "setting_pajak_penjualan"."id";
ALTER SEQUENCE "public"."setting_perusahaan_id_seq" OWNED BY "setting_perusahaan"."id";
ALTER SEQUENCE "public"."status_distribusi_id_seq" OWNED BY "status_distribusi"."id";
ALTER SEQUENCE "public"."stok_barang_id_seq" OWNED BY "stok_barang"."id";
ALTER SEQUENCE "public"."supplier_bank_id_seq" OWNED BY "supplier_bank"."id";
ALTER SEQUENCE "public"."supplier_id_seq" OWNED BY "supplier"."id";
ALTER SEQUENCE "public"."tipe_barang_id_seq" OWNED BY "tipe_barang"."id";
ALTER SEQUENCE "public"."tipe_user_id_seq" OWNED BY "tipe_user"."id";
ALTER SEQUENCE "public"."user_privilages_id_seq" OWNED BY "user_privilages"."id";

-- ----------------------------
-- Primary Key structure for table "public"."_default"
-- ----------------------------
ALTER TABLE "public"."_default" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."barang"
-- ----------------------------
ALTER TABLE "public"."barang" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."barang_masuk"
-- ----------------------------
ALTER TABLE "public"."barang_masuk" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."barang_masuk_detail"
-- ----------------------------
ALTER TABLE "public"."barang_masuk_detail" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."customer"
-- ----------------------------
ALTER TABLE "public"."customer" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."finishing_barang"
-- ----------------------------
ALTER TABLE "public"."finishing_barang" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."invoice_distribusi"
-- ----------------------------
ALTER TABLE "public"."invoice_distribusi" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."menu"
-- ----------------------------
ALTER TABLE "public"."menu" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."notifikasi"
-- ----------------------------
ALTER TABLE "public"."notifikasi" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."pembayaran_distribusi"
-- ----------------------------
ALTER TABLE "public"."pembayaran_distribusi" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."pembayaran_penjualan"
-- ----------------------------
ALTER TABLE "public"."pembayaran_penjualan" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."pengiriman"
-- ----------------------------
ALTER TABLE "public"."pengiriman" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."pengiriman_detail"
-- ----------------------------
ALTER TABLE "public"."pengiriman_detail" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."penjualan"
-- ----------------------------
ALTER TABLE "public"."penjualan" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."penjualan_detail"
-- ----------------------------
ALTER TABLE "public"."penjualan_detail" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."penyesuaian_harga"
-- ----------------------------
ALTER TABLE "public"."penyesuaian_harga" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."penyesuaian_harga_detail"
-- ----------------------------
ALTER TABLE "public"."penyesuaian_harga_detail" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."penyesuaian_stok"
-- ----------------------------
ALTER TABLE "public"."penyesuaian_stok" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."penyesuaian_stok_detail"
-- ----------------------------
ALTER TABLE "public"."penyesuaian_stok_detail" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."perubahan_harga"
-- ----------------------------
ALTER TABLE "public"."perubahan_harga" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."perusahaan_bank"
-- ----------------------------
ALTER TABLE "public"."perusahaan_bank" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."purchase_order"
-- ----------------------------
ALTER TABLE "public"."purchase_order" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."retur_penjualan"
-- ----------------------------
ALTER TABLE "public"."retur_penjualan" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."retur_penjualan_detail"
-- ----------------------------
ALTER TABLE "public"."retur_penjualan_detail" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."s_user"
-- ----------------------------
ALTER TABLE "public"."s_user" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."sales_contract"
-- ----------------------------
ALTER TABLE "public"."sales_contract" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."sales_contract_detail"
-- ----------------------------
ALTER TABLE "public"."sales_contract_detail" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."setting_pajak"
-- ----------------------------
ALTER TABLE "public"."setting_pajak" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."setting_pajak_penjualan"
-- ----------------------------
ALTER TABLE "public"."setting_pajak_penjualan" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."setting_perusahaan"
-- ----------------------------
ALTER TABLE "public"."setting_perusahaan" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."status_distribusi"
-- ----------------------------
ALTER TABLE "public"."status_distribusi" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."stok_barang"
-- ----------------------------
ALTER TABLE "public"."stok_barang" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."supplier"
-- ----------------------------
ALTER TABLE "public"."supplier" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."supplier_bank"
-- ----------------------------
ALTER TABLE "public"."supplier_bank" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."tipe_barang"
-- ----------------------------
ALTER TABLE "public"."tipe_barang" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."tipe_user"
-- ----------------------------
ALTER TABLE "public"."tipe_user" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."user_privilages"
-- ----------------------------
ALTER TABLE "public"."user_privilages" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Key structure for table "public"."barang"
-- ----------------------------
ALTER TABLE "public"."barang" ADD FOREIGN KEY ("tipe_barang") REFERENCES "public"."tipe_barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."barang" ADD FOREIGN KEY ("supplier") REFERENCES "public"."supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."barang_masuk"
-- ----------------------------
ALTER TABLE "public"."barang_masuk" ADD FOREIGN KEY ("supplier") REFERENCES "public"."supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."barang_masuk_detail"
-- ----------------------------
ALTER TABLE "public"."barang_masuk_detail" ADD FOREIGN KEY ("barang") REFERENCES "public"."barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."barang_masuk_detail" ADD FOREIGN KEY ("parent") REFERENCES "public"."barang_masuk" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."invoice_distribusi"
-- ----------------------------
ALTER TABLE "public"."invoice_distribusi" ADD FOREIGN KEY ("parent") REFERENCES "public"."pengiriman" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."pembayaran_distribusi"
-- ----------------------------
ALTER TABLE "public"."pembayaran_distribusi" ADD FOREIGN KEY ("parent") REFERENCES "public"."invoice_distribusi" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."pembayaran_penjualan"
-- ----------------------------
ALTER TABLE "public"."pembayaran_penjualan" ADD FOREIGN KEY ("parent") REFERENCES "public"."penjualan" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."pengiriman"
-- ----------------------------
ALTER TABLE "public"."pengiriman" ADD FOREIGN KEY ("supplier") REFERENCES "public"."supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."pengiriman_detail"
-- ----------------------------
ALTER TABLE "public"."pengiriman_detail" ADD FOREIGN KEY ("sales_contract_detail_id") REFERENCES "public"."sales_contract_detail" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pengiriman_detail" ADD FOREIGN KEY ("parent") REFERENCES "public"."pengiriman" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pengiriman_detail" ADD FOREIGN KEY ("sales_contract_id") REFERENCES "public"."sales_contract" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."penjualan"
-- ----------------------------
ALTER TABLE "public"."penjualan" ADD FOREIGN KEY ("customer") REFERENCES "public"."customer" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."penjualan_detail"
-- ----------------------------
ALTER TABLE "public"."penjualan_detail" ADD FOREIGN KEY ("barang") REFERENCES "public"."barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."penjualan_detail" ADD FOREIGN KEY ("parent") REFERENCES "public"."penjualan" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."penyesuaian_harga_detail"
-- ----------------------------
ALTER TABLE "public"."penyesuaian_harga_detail" ADD FOREIGN KEY ("parent") REFERENCES "public"."penyesuaian_harga" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."penyesuaian_harga_detail" ADD FOREIGN KEY ("barang") REFERENCES "public"."barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."penyesuaian_stok_detail"
-- ----------------------------
ALTER TABLE "public"."penyesuaian_stok_detail" ADD FOREIGN KEY ("parent") REFERENCES "public"."penyesuaian_stok" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."penyesuaian_stok_detail" ADD FOREIGN KEY ("barang") REFERENCES "public"."barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."perubahan_harga"
-- ----------------------------
ALTER TABLE "public"."perubahan_harga" ADD FOREIGN KEY ("barang") REFERENCES "public"."barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."purchase_order"
-- ----------------------------
ALTER TABLE "public"."purchase_order" ADD FOREIGN KEY ("parent") REFERENCES "public"."sales_contract" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."retur_penjualan"
-- ----------------------------
ALTER TABLE "public"."retur_penjualan" ADD FOREIGN KEY ("parent") REFERENCES "public"."penjualan" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."retur_penjualan_detail"
-- ----------------------------
ALTER TABLE "public"."retur_penjualan_detail" ADD FOREIGN KEY ("parent") REFERENCES "public"."penjualan" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."s_user"
-- ----------------------------
ALTER TABLE "public"."s_user" ADD FOREIGN KEY ("tipe") REFERENCES "public"."tipe_user" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."sales_contract"
-- ----------------------------
ALTER TABLE "public"."sales_contract" ADD FOREIGN KEY ("supplier") REFERENCES "public"."supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."sales_contract" ADD FOREIGN KEY ("customer") REFERENCES "public"."customer" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."sales_contract" ADD FOREIGN KEY ("status") REFERENCES "public"."status_distribusi" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."sales_contract_detail"
-- ----------------------------
ALTER TABLE "public"."sales_contract_detail" ADD FOREIGN KEY ("barang") REFERENCES "public"."barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."sales_contract_detail" ADD FOREIGN KEY ("parent") REFERENCES "public"."sales_contract" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."stok_barang"
-- ----------------------------
ALTER TABLE "public"."stok_barang" ADD FOREIGN KEY ("barang") REFERENCES "public"."barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."supplier_bank"
-- ----------------------------
ALTER TABLE "public"."supplier_bank" ADD FOREIGN KEY ("supplier") REFERENCES "public"."supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."user_privilages"
-- ----------------------------
ALTER TABLE "public"."user_privilages" ADD FOREIGN KEY ("tipe_user") REFERENCES "public"."tipe_user" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."user_privilages" ADD FOREIGN KEY ("menu") REFERENCES "public"."menu" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
