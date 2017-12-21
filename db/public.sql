/*
 Navicat PostgreSQL Data Transfer

 Source Server         : postgres@localhost
 Source Server Type    : PostgreSQL
 Source Server Version : 90603
 Source Host           : localhost:5432
 Source Catalog        : dkj-pos
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 90603
 File Encoding         : 65001

 Date: 14/11/2017 21:12:23
*/


-- ----------------------------
-- Sequence structure for barang_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."barang_id_seq";
CREATE SEQUENCE "public"."barang_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for barang_masuk_detail_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."barang_masuk_detail_id_seq";
CREATE SEQUENCE "public"."barang_masuk_detail_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for barang_masuk_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."barang_masuk_id_seq";
CREATE SEQUENCE "public"."barang_masuk_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for customer_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."customer_id_seq";
CREATE SEQUENCE "public"."customer_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for finishing_barang_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."finishing_barang_id_seq";
CREATE SEQUENCE "public"."finishing_barang_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for menu_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."menu_id_seq";
CREATE SEQUENCE "public"."menu_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for notifikasi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."notifikasi_id_seq";
CREATE SEQUENCE "public"."notifikasi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for pembayaran_penjualan_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."pembayaran_penjualan_id_seq";
CREATE SEQUENCE "public"."pembayaran_penjualan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for penjualan_detail_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."penjualan_detail_id_seq";
CREATE SEQUENCE "public"."penjualan_detail_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for penjualan_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."penjualan_id_seq";
CREATE SEQUENCE "public"."penjualan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for penyesuaian_harga_detail_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."penyesuaian_harga_detail_id_seq";
CREATE SEQUENCE "public"."penyesuaian_harga_detail_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for penyesuaian_harga_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."penyesuaian_harga_id_seq";
CREATE SEQUENCE "public"."penyesuaian_harga_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for penyesuaian_stok_detail_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."penyesuaian_stok_detail_id_seq";
CREATE SEQUENCE "public"."penyesuaian_stok_detail_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for penyesuaian_stok_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."penyesuaian_stok_id_seq";
CREATE SEQUENCE "public"."penyesuaian_stok_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for perubahan_harga_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."perubahan_harga_id_seq";
CREATE SEQUENCE "public"."perubahan_harga_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for perusahaan_bank_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."perusahaan_bank_id_seq";
CREATE SEQUENCE "public"."perusahaan_bank_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for retur_penjualan_detail_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."retur_penjualan_detail_id_seq";
CREATE SEQUENCE "public"."retur_penjualan_detail_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for retur_penjualan_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."retur_penjualan_id_seq";
CREATE SEQUENCE "public"."retur_penjualan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for s_user_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."s_user_id_seq";
CREATE SEQUENCE "public"."s_user_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for setting_pajak_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."setting_pajak_id_seq";
CREATE SEQUENCE "public"."setting_pajak_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for setting_pajak_penjualan_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."setting_pajak_penjualan_id_seq";
CREATE SEQUENCE "public"."setting_pajak_penjualan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for setting_perusahaan_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."setting_perusahaan_id_seq";
CREATE SEQUENCE "public"."setting_perusahaan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for stok_barang_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."stok_barang_id_seq";
CREATE SEQUENCE "public"."stok_barang_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for supplier_bank_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."supplier_bank_id_seq";
CREATE SEQUENCE "public"."supplier_bank_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for supplier_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."supplier_id_seq";
CREATE SEQUENCE "public"."supplier_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for tipe_barang_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."tipe_barang_id_seq";
CREATE SEQUENCE "public"."tipe_barang_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for tipe_user_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."tipe_user_id_seq";
CREATE SEQUENCE "public"."tipe_user_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for user_privilages_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."user_privilages_id_seq";
CREATE SEQUENCE "public"."user_privilages_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Table structure for _default
-- ----------------------------
DROP TABLE IF EXISTS "public"."_default";
CREATE TABLE "public"."_default" (
  "id" int4 NOT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS "public"."barang";
CREATE TABLE "public"."barang" (
  "id" int4 NOT NULL DEFAULT nextval('barang_id_seq'::regclass),
  "tipe_barang" int4 NOT NULL,
  "supplier" int4 NOT NULL,
  "section" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "deskripsi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "berat" float8 NOT NULL,
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for barang_masuk
-- ----------------------------
DROP TABLE IF EXISTS "public"."barang_masuk";
CREATE TABLE "public"."barang_masuk" (
  "id" int4 NOT NULL DEFAULT nextval('barang_masuk_id_seq'::regclass),
  "nomor_transaksi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "supplier" int4 NOT NULL,
  "tanggal" date NOT NULL,
  "nomor_surat_jalan" varchar(255) COLLATE "pg_catalog"."default",
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for barang_masuk_detail
-- ----------------------------
DROP TABLE IF EXISTS "public"."barang_masuk_detail";
CREATE TABLE "public"."barang_masuk_detail" (
  "id" int4 NOT NULL DEFAULT nextval('barang_masuk_detail_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "barang" int4 NOT NULL,
  "panjang" float8 NOT NULL,
  "finish" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "harga_beli" float8 NOT NULL,
  "harga_jual" float8 NOT NULL,
  "jumlah" int4 NOT NULL,
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS "public"."customer";
CREATE TABLE "public"."customer" (
  "id" int4 NOT NULL DEFAULT nextval('customer_id_seq'::regclass),
  "nama" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "alamat" text COLLATE "pg_catalog"."default" NOT NULL,
  "telepon" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "fax" varchar(255) COLLATE "pg_catalog"."default",
  "email" varchar(255) COLLATE "pg_catalog"."default",
  "contact_person" varchar(255) COLLATE "pg_catalog"."default",
  "inisial" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for finishing_barang
-- ----------------------------
DROP TABLE IF EXISTS "public"."finishing_barang";
CREATE TABLE "public"."finishing_barang" (
  "id" int4 NOT NULL DEFAULT nextval('finishing_barang_id_seq'::regclass),
  "finishing" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "harga" float8 NOT NULL,
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS "public"."menu";
CREATE TABLE "public"."menu" (
  "id" int4 NOT NULL DEFAULT nextval('menu_id_seq'::regclass),
  "menu" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "index" int4 NOT NULL,
  "parent" int4,
  "url" varchar(255) COLLATE "pg_catalog"."default",
  "icon" varchar(255) COLLATE "pg_catalog"."default",
  "color" varchar(255) COLLATE "pg_catalog"."default",
  "id_element" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO "public"."menu" VALUES (2, 'Type User', 1, 1, 'Type_user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (1, ' User', 1, NULL, 'dashboard/route/1', 'fa fa-user', 'red-thunderbird', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (3, 'User', 1, 1, 'S_user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (9, 'Supplier', 1, 6, 'Supplier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (11, 'Barang', 1, 6, 'Barang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (14, 'Stok Barang', 1, 7, 'Stok_barang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (15, 'Barang Masuk', 1, 7, 'Barang_masuk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (16, 'Penyesuaian Stok', 1, 7, 'Penyesuaian_stok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (17, 'Penyesuaian Harga', 1, 7, 'Penyesuaian_harga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (6, 'Library', 1, NULL, 'dashboard/route/6', 'fa fa-book', 'blue-madison', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (7, 'Inventory', 1, NULL, 'dashboard/route/7', 'fa fa-archive', 'green-seagreen', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (12, 'Finishing', 1, 6, 'Finishing_barang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (10, 'Tipe Barang', 1, 6, 'Tipe_barang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS "public"."migrations";
CREATE TABLE "public"."migrations" (
  "version" int8 NOT NULL
)
;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO "public"."migrations" VALUES (29);

-- ----------------------------
-- Table structure for notifikasi
-- ----------------------------
DROP TABLE IF EXISTS "public"."notifikasi";
CREATE TABLE "public"."notifikasi" (
  "id" int4 NOT NULL DEFAULT nextval('notifikasi_id_seq'::regclass),
  "text" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "referensi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "referensi_id" int4,
  "link" varchar(255) COLLATE "pg_catalog"."default",
  "status" int4,
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for pembayaran_penjualan
-- ----------------------------
DROP TABLE IF EXISTS "public"."pembayaran_penjualan";
CREATE TABLE "public"."pembayaran_penjualan" (
  "id" int4 NOT NULL DEFAULT nextval('pembayaran_penjualan_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "nomor_transaksi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tanggal" timestamp(6) NOT NULL,
  "nominal" float8 NOT NULL,
  "pembayaran_melalui" int4 NOT NULL,
  "status" int4 NOT NULL,
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for penjualan
-- ----------------------------
DROP TABLE IF EXISTS "public"."penjualan";
CREATE TABLE "public"."penjualan" (
  "id" int4 NOT NULL DEFAULT nextval('penjualan_id_seq'::regclass),
  "nomor_transaksi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "customer" int4 NOT NULL,
  "tanggal" timestamp(6) NOT NULL,
  "total" float8,
  "diskon" float8,
  "diskon_type" int4,
  "ppn" float8,
  "grand_total" float8,
  "jenis_pembayaran" int4,
  "term_of_payment" char(4) COLLATE "pg_catalog"."default",
  "nama_bank" varchar(255) COLLATE "pg_catalog"."default",
  "nomor_akun" varchar(255) COLLATE "pg_catalog"."default",
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for penjualan_detail
-- ----------------------------
DROP TABLE IF EXISTS "public"."penjualan_detail";
CREATE TABLE "public"."penjualan_detail" (
  "id" int4 NOT NULL DEFAULT nextval('penjualan_detail_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "barang" int4 NOT NULL,
  "panjang" float8 NOT NULL,
  "finishing" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
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
;

-- ----------------------------
-- Table structure for penyesuaian_harga
-- ----------------------------
DROP TABLE IF EXISTS "public"."penyesuaian_harga";
CREATE TABLE "public"."penyesuaian_harga" (
  "id" int4 NOT NULL DEFAULT nextval('penyesuaian_harga_id_seq'::regclass),
  "nomor_transaksi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tanggal" date NOT NULL,
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for penyesuaian_harga_detail
-- ----------------------------
DROP TABLE IF EXISTS "public"."penyesuaian_harga_detail";
CREATE TABLE "public"."penyesuaian_harga_detail" (
  "id" int4 NOT NULL DEFAULT nextval('penyesuaian_harga_detail_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "barang" int4 NOT NULL,
  "panjang" float8 NOT NULL,
  "finish" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "harga_sebelum" float8 NOT NULL,
  "harga_koreksi" float8 NOT NULL,
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for penyesuaian_stok
-- ----------------------------
DROP TABLE IF EXISTS "public"."penyesuaian_stok";
CREATE TABLE "public"."penyesuaian_stok" (
  "id" int4 NOT NULL DEFAULT nextval('penyesuaian_stok_id_seq'::regclass),
  "nomor_transaksi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tanggal" date NOT NULL,
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for penyesuaian_stok_detail
-- ----------------------------
DROP TABLE IF EXISTS "public"."penyesuaian_stok_detail";
CREATE TABLE "public"."penyesuaian_stok_detail" (
  "id" int4 NOT NULL DEFAULT nextval('penyesuaian_stok_detail_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "barang" int4 NOT NULL,
  "panjang" float8 NOT NULL,
  "finish" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "stok_sebelum" int4 NOT NULL,
  "stok_koreksi" int4 NOT NULL,
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for perubahan_harga
-- ----------------------------
DROP TABLE IF EXISTS "public"."perubahan_harga";
CREATE TABLE "public"."perubahan_harga" (
  "id" int4 NOT NULL DEFAULT nextval('perubahan_harga_id_seq'::regclass),
  "transaksi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nomor_transaksi" varchar(255) COLLATE "pg_catalog"."default",
  "barang" int4 NOT NULL,
  "panjang" float8 NOT NULL,
  "finish" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "harga_sebelum" float8 NOT NULL,
  "harga_koreksi" float8 NOT NULL,
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for perusahaan_bank
-- ----------------------------
DROP TABLE IF EXISTS "public"."perusahaan_bank";
CREATE TABLE "public"."perusahaan_bank" (
  "id" int4 NOT NULL DEFAULT nextval('perusahaan_bank_id_seq'::regclass),
  "nama_akun" varchar(255) COLLATE "pg_catalog"."default",
  "bank" varchar(255) COLLATE "pg_catalog"."default",
  "nomor_akun" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for retur_penjualan
-- ----------------------------
DROP TABLE IF EXISTS "public"."retur_penjualan";
CREATE TABLE "public"."retur_penjualan" (
  "id" int4 NOT NULL DEFAULT nextval('retur_penjualan_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "nomor_transaksi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tanggal" timestamp(6) NOT NULL,
  "status" int4 NOT NULL,
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for retur_penjualan_detail
-- ----------------------------
DROP TABLE IF EXISTS "public"."retur_penjualan_detail";
CREATE TABLE "public"."retur_penjualan_detail" (
  "id" int4 NOT NULL DEFAULT nextval('retur_penjualan_detail_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "parent_detail" int4 NOT NULL,
  "jumlah_beli" int4 NOT NULL,
  "jumlah_retur" int4 NOT NULL,
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for s_user
-- ----------------------------
DROP TABLE IF EXISTS "public"."s_user";
CREATE TABLE "public"."s_user" (
  "id" int4 NOT NULL DEFAULT nextval('s_user_id_seq'::regclass),
  "tipe" int4 NOT NULL,
  "nama" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "telepon" varchar(255) COLLATE "pg_catalog"."default",
  "username" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "password" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "foto" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Records of s_user
-- ----------------------------
INSERT INTO "public"."s_user" VALUES (1, 1, 'Administrator', NULL, 'beheerder', '$2y$10$oe36uixTBiJ4FQhDchbOPuN0dESx2kB17oF113GdflIHBMbDH5FB2', NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for setting_pajak
-- ----------------------------
DROP TABLE IF EXISTS "public"."setting_pajak";
CREATE TABLE "public"."setting_pajak" (
  "id" int4 NOT NULL DEFAULT nextval('setting_pajak_id_seq'::regclass),
  "pajak" varchar(255) COLLATE "pg_catalog"."default",
  "value" float8,
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Records of setting_pajak
-- ----------------------------
INSERT INTO "public"."setting_pajak" VALUES (1, 'PPN', 10, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for setting_pajak_penjualan
-- ----------------------------
DROP TABLE IF EXISTS "public"."setting_pajak_penjualan";
CREATE TABLE "public"."setting_pajak_penjualan" (
  "id" int4 NOT NULL DEFAULT nextval('setting_pajak_penjualan_id_seq'::regclass),
  "status" char(1) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Records of setting_pajak_penjualan
-- ----------------------------
INSERT INTO "public"."setting_pajak_penjualan" VALUES (1, '0', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for setting_perusahaan
-- ----------------------------
DROP TABLE IF EXISTS "public"."setting_perusahaan";
CREATE TABLE "public"."setting_perusahaan" (
  "id" int4 NOT NULL DEFAULT nextval('setting_perusahaan_id_seq'::regclass),
  "nama_perusahaan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "alamat" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "telepon" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "fax" varchar(255) COLLATE "pg_catalog"."default",
  "email" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Records of setting_perusahaan
-- ----------------------------
INSERT INTO "public"."setting_perusahaan" VALUES (1, 'PT. DWI KREASI JAYA', 'Royal Residence B2-100 Raya Babatan, Wiyung, Surabaya', '087701111077', '', 'dwikreasijaya@gmail.com', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for stok_barang
-- ----------------------------
DROP TABLE IF EXISTS "public"."stok_barang";
CREATE TABLE "public"."stok_barang" (
  "id" int4 NOT NULL DEFAULT nextval('stok_barang_id_seq'::regclass),
  "barang" int4 NOT NULL,
  "panjang" float8 NOT NULL,
  "finish" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "harga" float8,
  "stok" int4,
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for supplier
-- ----------------------------
DROP TABLE IF EXISTS "public"."supplier";
CREATE TABLE "public"."supplier" (
  "id" int4 NOT NULL DEFAULT nextval('supplier_id_seq'::regclass),
  "nama" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "alamat" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "telepon" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "fax" varchar(255) COLLATE "pg_catalog"."default",
  "email" varchar(255) COLLATE "pg_catalog"."default",
  "contact_person" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for supplier_bank
-- ----------------------------
DROP TABLE IF EXISTS "public"."supplier_bank";
CREATE TABLE "public"."supplier_bank" (
  "id" int4 NOT NULL DEFAULT nextval('supplier_bank_id_seq'::regclass),
  "supplier" int4 NOT NULL,
  "nama" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nomor" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "cabang" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for tipe_barang
-- ----------------------------
DROP TABLE IF EXISTS "public"."tipe_barang";
CREATE TABLE "public"."tipe_barang" (
  "id" int4 NOT NULL DEFAULT nextval('tipe_barang_id_seq'::regclass),
  "tipe_barang" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for tipe_user
-- ----------------------------
DROP TABLE IF EXISTS "public"."tipe_user";
CREATE TABLE "public"."tipe_user" (
  "id" int4 NOT NULL DEFAULT nextval('tipe_user_id_seq'::regclass),
  "tipe_user" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Records of tipe_user
-- ----------------------------
INSERT INTO "public"."tipe_user" VALUES (1, 'Admin', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."tipe_user" VALUES (2, 'Kasir', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for user_privilages
-- ----------------------------
DROP TABLE IF EXISTS "public"."user_privilages";
CREATE TABLE "public"."user_privilages" (
  "id" int4 NOT NULL DEFAULT nextval('user_privilages_id_seq'::regclass),
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
;

-- ----------------------------
-- Records of user_privilages
-- ----------------------------
INSERT INTO "public"."user_privilages" VALUES (3, 1, 2, 1, 1, 0, 0, NULL, '2017-11-14 13:52:12', NULL, NULL, 1, NULL);
INSERT INTO "public"."user_privilages" VALUES (1, 1, 2, 1, 1, 0, 0, NULL, '2017-11-14 13:52:12', '2017-11-14 15:03:08', NULL, 1, 1);
INSERT INTO "public"."user_privilages" VALUES (2, 1, 2, 1, 1, 0, 0, NULL, '2017-11-14 13:52:12', '2017-11-14 15:03:54', NULL, 1, 1);
INSERT INTO "public"."user_privilages" VALUES (5, 1, 9, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."user_privilages" VALUES (6, 1, 10, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."user_privilages" VALUES (7, 1, 11, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."user_privilages" VALUES (9, 1, 12, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."user_privilages" VALUES (14, 1, 14, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."user_privilages" VALUES (15, 1, 15, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."user_privilages" VALUES (16, 1, 16, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."user_privilages" VALUES (17, 1, 17, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."barang_id_seq"
OWNED BY "public"."barang"."id";
SELECT setval('"public"."barang_id_seq"', 2, false);
ALTER SEQUENCE "public"."barang_masuk_detail_id_seq"
OWNED BY "public"."barang_masuk_detail"."id";
SELECT setval('"public"."barang_masuk_detail_id_seq"', 2, false);
ALTER SEQUENCE "public"."barang_masuk_id_seq"
OWNED BY "public"."barang_masuk"."id";
SELECT setval('"public"."barang_masuk_id_seq"', 2, false);
ALTER SEQUENCE "public"."customer_id_seq"
OWNED BY "public"."customer"."id";
SELECT setval('"public"."customer_id_seq"', 2, false);
ALTER SEQUENCE "public"."finishing_barang_id_seq"
OWNED BY "public"."finishing_barang"."id";
SELECT setval('"public"."finishing_barang_id_seq"', 2, false);
ALTER SEQUENCE "public"."menu_id_seq"
OWNED BY "public"."menu"."id";
SELECT setval('"public"."menu_id_seq"', 18, true);
ALTER SEQUENCE "public"."notifikasi_id_seq"
OWNED BY "public"."notifikasi"."id";
SELECT setval('"public"."notifikasi_id_seq"', 2, false);
ALTER SEQUENCE "public"."pembayaran_penjualan_id_seq"
OWNED BY "public"."pembayaran_penjualan"."id";
SELECT setval('"public"."pembayaran_penjualan_id_seq"', 2, false);
ALTER SEQUENCE "public"."penjualan_detail_id_seq"
OWNED BY "public"."penjualan_detail"."id";
SELECT setval('"public"."penjualan_detail_id_seq"', 2, false);
ALTER SEQUENCE "public"."penjualan_id_seq"
OWNED BY "public"."penjualan"."id";
SELECT setval('"public"."penjualan_id_seq"', 2, false);
ALTER SEQUENCE "public"."penyesuaian_harga_detail_id_seq"
OWNED BY "public"."penyesuaian_harga_detail"."id";
SELECT setval('"public"."penyesuaian_harga_detail_id_seq"', 2, false);
ALTER SEQUENCE "public"."penyesuaian_harga_id_seq"
OWNED BY "public"."penyesuaian_harga"."id";
SELECT setval('"public"."penyesuaian_harga_id_seq"', 2, false);
ALTER SEQUENCE "public"."penyesuaian_stok_detail_id_seq"
OWNED BY "public"."penyesuaian_stok_detail"."id";
SELECT setval('"public"."penyesuaian_stok_detail_id_seq"', 2, false);
ALTER SEQUENCE "public"."penyesuaian_stok_id_seq"
OWNED BY "public"."penyesuaian_stok"."id";
SELECT setval('"public"."penyesuaian_stok_id_seq"', 2, false);
ALTER SEQUENCE "public"."perubahan_harga_id_seq"
OWNED BY "public"."perubahan_harga"."id";
SELECT setval('"public"."perubahan_harga_id_seq"', 2, false);
ALTER SEQUENCE "public"."perusahaan_bank_id_seq"
OWNED BY "public"."perusahaan_bank"."id";
SELECT setval('"public"."perusahaan_bank_id_seq"', 2, false);
ALTER SEQUENCE "public"."retur_penjualan_detail_id_seq"
OWNED BY "public"."retur_penjualan_detail"."id";
SELECT setval('"public"."retur_penjualan_detail_id_seq"', 2, false);
ALTER SEQUENCE "public"."retur_penjualan_id_seq"
OWNED BY "public"."retur_penjualan"."id";
SELECT setval('"public"."retur_penjualan_id_seq"', 2, false);
ALTER SEQUENCE "public"."s_user_id_seq"
OWNED BY "public"."s_user"."id";
SELECT setval('"public"."s_user_id_seq"', 2, true);
ALTER SEQUENCE "public"."setting_pajak_id_seq"
OWNED BY "public"."setting_pajak"."id";
SELECT setval('"public"."setting_pajak_id_seq"', 2, true);
ALTER SEQUENCE "public"."setting_pajak_penjualan_id_seq"
OWNED BY "public"."setting_pajak_penjualan"."id";
SELECT setval('"public"."setting_pajak_penjualan_id_seq"', 2, true);
ALTER SEQUENCE "public"."setting_perusahaan_id_seq"
OWNED BY "public"."setting_perusahaan"."id";
SELECT setval('"public"."setting_perusahaan_id_seq"', 2, true);
ALTER SEQUENCE "public"."stok_barang_id_seq"
OWNED BY "public"."stok_barang"."id";
SELECT setval('"public"."stok_barang_id_seq"', 2, false);
ALTER SEQUENCE "public"."supplier_bank_id_seq"
OWNED BY "public"."supplier_bank"."id";
SELECT setval('"public"."supplier_bank_id_seq"', 2, false);
ALTER SEQUENCE "public"."supplier_id_seq"
OWNED BY "public"."supplier"."id";
SELECT setval('"public"."supplier_id_seq"', 2, false);
ALTER SEQUENCE "public"."tipe_barang_id_seq"
OWNED BY "public"."tipe_barang"."id";
SELECT setval('"public"."tipe_barang_id_seq"', 2, false);
ALTER SEQUENCE "public"."tipe_user_id_seq"
OWNED BY "public"."tipe_user"."id";
SELECT setval('"public"."tipe_user_id_seq"', 3, true);
ALTER SEQUENCE "public"."user_privilages_id_seq"
OWNED BY "public"."user_privilages"."id";
SELECT setval('"public"."user_privilages_id_seq"', 18, true);

-- ----------------------------
-- Primary Key structure for table _default
-- ----------------------------
ALTER TABLE "public"."_default" ADD CONSTRAINT "pk__default" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table barang
-- ----------------------------
ALTER TABLE "public"."barang" ADD CONSTRAINT "pk_barang" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table barang_masuk
-- ----------------------------
ALTER TABLE "public"."barang_masuk" ADD CONSTRAINT "pk_barang_masuk" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table barang_masuk_detail
-- ----------------------------
ALTER TABLE "public"."barang_masuk_detail" ADD CONSTRAINT "pk_barang_masuk_detail" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table customer
-- ----------------------------
ALTER TABLE "public"."customer" ADD CONSTRAINT "pk_customer" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table finishing_barang
-- ----------------------------
ALTER TABLE "public"."finishing_barang" ADD CONSTRAINT "pk_finishing_barang" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table menu
-- ----------------------------
ALTER TABLE "public"."menu" ADD CONSTRAINT "pk_menu" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table notifikasi
-- ----------------------------
ALTER TABLE "public"."notifikasi" ADD CONSTRAINT "pk_notifikasi" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table pembayaran_penjualan
-- ----------------------------
ALTER TABLE "public"."pembayaran_penjualan" ADD CONSTRAINT "pk_pembayaran_penjualan" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table penjualan
-- ----------------------------
ALTER TABLE "public"."penjualan" ADD CONSTRAINT "pk_penjualan" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table penjualan_detail
-- ----------------------------
ALTER TABLE "public"."penjualan_detail" ADD CONSTRAINT "pk_penjualan_detail" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table penyesuaian_harga
-- ----------------------------
ALTER TABLE "public"."penyesuaian_harga" ADD CONSTRAINT "pk_penyesuaian_harga" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table penyesuaian_harga_detail
-- ----------------------------
ALTER TABLE "public"."penyesuaian_harga_detail" ADD CONSTRAINT "pk_penyesuaian_harga_detail" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table penyesuaian_stok
-- ----------------------------
ALTER TABLE "public"."penyesuaian_stok" ADD CONSTRAINT "pk_penyesuaian_stok" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table penyesuaian_stok_detail
-- ----------------------------
ALTER TABLE "public"."penyesuaian_stok_detail" ADD CONSTRAINT "pk_penyesuaian_stok_detail" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table perubahan_harga
-- ----------------------------
ALTER TABLE "public"."perubahan_harga" ADD CONSTRAINT "pk_perubahan_harga" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table perusahaan_bank
-- ----------------------------
ALTER TABLE "public"."perusahaan_bank" ADD CONSTRAINT "pk_perusahaan_bank" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table retur_penjualan
-- ----------------------------
ALTER TABLE "public"."retur_penjualan" ADD CONSTRAINT "pk_retur_penjualan" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table retur_penjualan_detail
-- ----------------------------
ALTER TABLE "public"."retur_penjualan_detail" ADD CONSTRAINT "pk_retur_penjualan_detail" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table s_user
-- ----------------------------
ALTER TABLE "public"."s_user" ADD CONSTRAINT "pk_s_user" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table setting_pajak
-- ----------------------------
ALTER TABLE "public"."setting_pajak" ADD CONSTRAINT "pk_setting_pajak" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table setting_pajak_penjualan
-- ----------------------------
ALTER TABLE "public"."setting_pajak_penjualan" ADD CONSTRAINT "pk_setting_pajak_penjualan" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table setting_perusahaan
-- ----------------------------
ALTER TABLE "public"."setting_perusahaan" ADD CONSTRAINT "pk_setting_perusahaan" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table stok_barang
-- ----------------------------
ALTER TABLE "public"."stok_barang" ADD CONSTRAINT "pk_stok_barang" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table supplier
-- ----------------------------
ALTER TABLE "public"."supplier" ADD CONSTRAINT "pk_supplier" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table supplier_bank
-- ----------------------------
ALTER TABLE "public"."supplier_bank" ADD CONSTRAINT "pk_supplier_bank" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table tipe_barang
-- ----------------------------
ALTER TABLE "public"."tipe_barang" ADD CONSTRAINT "pk_tipe_barang" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table tipe_user
-- ----------------------------
ALTER TABLE "public"."tipe_user" ADD CONSTRAINT "pk_tipe_user" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table user_privilages
-- ----------------------------
ALTER TABLE "public"."user_privilages" ADD CONSTRAINT "pk_user_privilages" PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Keys structure for table barang
-- ----------------------------
ALTER TABLE "public"."barang" ADD CONSTRAINT "barang_supplier_fkey" FOREIGN KEY ("supplier") REFERENCES "supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."barang" ADD CONSTRAINT "barang_tipe_barang_fkey" FOREIGN KEY ("tipe_barang") REFERENCES "tipe_barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table barang_masuk
-- ----------------------------
ALTER TABLE "public"."barang_masuk" ADD CONSTRAINT "barang_masuk_supplier_fkey" FOREIGN KEY ("supplier") REFERENCES "supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table barang_masuk_detail
-- ----------------------------
ALTER TABLE "public"."barang_masuk_detail" ADD CONSTRAINT "barang_masuk_detail_barang_fkey" FOREIGN KEY ("barang") REFERENCES "barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."barang_masuk_detail" ADD CONSTRAINT "barang_masuk_detail_parent_fkey" FOREIGN KEY ("parent") REFERENCES "barang_masuk" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table pembayaran_penjualan
-- ----------------------------
ALTER TABLE "public"."pembayaran_penjualan" ADD CONSTRAINT "pembayaran_penjualan_parent_fkey" FOREIGN KEY ("parent") REFERENCES "penjualan" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table penjualan
-- ----------------------------
ALTER TABLE "public"."penjualan" ADD CONSTRAINT "penjualan_customer_fkey" FOREIGN KEY ("customer") REFERENCES "customer" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table penjualan_detail
-- ----------------------------
ALTER TABLE "public"."penjualan_detail" ADD CONSTRAINT "penjualan_detail_barang_fkey" FOREIGN KEY ("barang") REFERENCES "barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."penjualan_detail" ADD CONSTRAINT "penjualan_detail_parent_fkey" FOREIGN KEY ("parent") REFERENCES "penjualan" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table penyesuaian_harga_detail
-- ----------------------------
ALTER TABLE "public"."penyesuaian_harga_detail" ADD CONSTRAINT "penyesuaian_harga_detail_barang_fkey" FOREIGN KEY ("barang") REFERENCES "barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."penyesuaian_harga_detail" ADD CONSTRAINT "penyesuaian_harga_detail_parent_fkey" FOREIGN KEY ("parent") REFERENCES "penyesuaian_harga" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table penyesuaian_stok_detail
-- ----------------------------
ALTER TABLE "public"."penyesuaian_stok_detail" ADD CONSTRAINT "penyesuaian_stok_detail_barang_fkey" FOREIGN KEY ("barang") REFERENCES "barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."penyesuaian_stok_detail" ADD CONSTRAINT "penyesuaian_stok_detail_parent_fkey" FOREIGN KEY ("parent") REFERENCES "penyesuaian_stok" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table perubahan_harga
-- ----------------------------
ALTER TABLE "public"."perubahan_harga" ADD CONSTRAINT "perubahan_harga_barang_fkey" FOREIGN KEY ("barang") REFERENCES "barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table retur_penjualan
-- ----------------------------
ALTER TABLE "public"."retur_penjualan" ADD CONSTRAINT "retur_penjualan_parent_fkey" FOREIGN KEY ("parent") REFERENCES "penjualan" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table retur_penjualan_detail
-- ----------------------------
ALTER TABLE "public"."retur_penjualan_detail" ADD CONSTRAINT "retur_penjualan_detail_parent_fkey" FOREIGN KEY ("parent") REFERENCES "penjualan" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table s_user
-- ----------------------------
ALTER TABLE "public"."s_user" ADD CONSTRAINT "s_user_tipe_fkey" FOREIGN KEY ("tipe") REFERENCES "tipe_user" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table stok_barang
-- ----------------------------
ALTER TABLE "public"."stok_barang" ADD CONSTRAINT "stok_barang_barang_fkey" FOREIGN KEY ("barang") REFERENCES "barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table supplier_bank
-- ----------------------------
ALTER TABLE "public"."supplier_bank" ADD CONSTRAINT "supplier_bank_supplier_fkey" FOREIGN KEY ("supplier") REFERENCES "supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table user_privilages
-- ----------------------------
ALTER TABLE "public"."user_privilages" ADD CONSTRAINT "user_privilages_menu_fkey" FOREIGN KEY ("menu") REFERENCES "menu" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."user_privilages" ADD CONSTRAINT "user_privilages_tipe_user_fkey" FOREIGN KEY ("tipe_user") REFERENCES "tipe_user" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
