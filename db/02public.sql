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

 Date: 16/11/2017 08:03:23
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
-- Sequence structure for invoice_distribusi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."invoice_distribusi_id_seq";
CREATE SEQUENCE "public"."invoice_distribusi_id_seq" 
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
-- Sequence structure for pembayaran_distribusi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."pembayaran_distribusi_id_seq";
CREATE SEQUENCE "public"."pembayaran_distribusi_id_seq" 
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
-- Sequence structure for pengiriman_detail_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."pengiriman_detail_id_seq";
CREATE SEQUENCE "public"."pengiriman_detail_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for pengiriman_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."pengiriman_id_seq";
CREATE SEQUENCE "public"."pengiriman_id_seq" 
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
-- Sequence structure for purchase_order_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."purchase_order_id_seq";
CREATE SEQUENCE "public"."purchase_order_id_seq" 
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
-- Sequence structure for sales_contract_detail_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."sales_contract_detail_id_seq";
CREATE SEQUENCE "public"."sales_contract_detail_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for sales_contract_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."sales_contract_id_seq";
CREATE SEQUENCE "public"."sales_contract_id_seq" 
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
-- Sequence structure for status_distribusi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."status_distribusi_id_seq";
CREATE SEQUENCE "public"."status_distribusi_id_seq" 
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
-- Records of barang
-- ----------------------------
INSERT INTO "public"."barang" VALUES (1, 1, 1, '91911', 'iiiii', 2, '2017-11-15 13:37:50', NULL, NULL, 1, NULL);

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
-- Records of barang_masuk
-- ----------------------------
INSERT INTO "public"."barang_masuk" VALUES (1, '17001/DKJ/BM/2017', 1, '2017-10-02', '6666', NULL, '2017-11-15 13:38:32', NULL, NULL, 1, NULL);
INSERT INTO "public"."barang_masuk" VALUES (2, '17002/DKJ/BM/2017', 1, '2017-10-01', '9', NULL, '2017-11-15 14:08:59', NULL, NULL, 1, NULL);

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
-- Records of barang_masuk_detail
-- ----------------------------
INSERT INTO "public"."barang_masuk_detail" VALUES (1, 1, 1, 2, '1', 10000, 15000, 9, '2017-11-15 13:38:32', NULL, NULL, 1, NULL);
INSERT INTO "public"."barang_masuk_detail" VALUES (2, 2, 1, 44, '1', 88, 55, 11, '2017-11-15 14:08:59', NULL, NULL, 1, NULL);

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
-- Records of customer
-- ----------------------------
INSERT INTO "public"."customer" VALUES (1, 'Perusahaan', '2423', '234', NULL, '', NULL, '', '2017-11-15 16:05:37', NULL, NULL, 1, NULL);

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
-- Records of finishing_barang
-- ----------------------------
INSERT INTO "public"."finishing_barang" VALUES (1, 'fp', 3000, '2017-11-15 13:37:23', NULL, NULL, 1, NULL);

-- ----------------------------
-- Table structure for invoice_distribusi
-- ----------------------------
DROP TABLE IF EXISTS "public"."invoice_distribusi";
CREATE TABLE "public"."invoice_distribusi" (
  "id" int4 NOT NULL DEFAULT nextval('invoice_distribusi_id_seq'::regclass),
  "parent" int4,
  "nomor_tranaksi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tanggal" timestamp(6) NOT NULL,
  "catatan" text COLLATE "pg_catalog"."default",
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
INSERT INTO "public"."menu" VALUES (19, 'Customer', 1, NULL, 'dashboard/route/19', 'fa fa-users', 'grey-salsa', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (20, 'Customer', 1, 19, 'Customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (22, 'Toko', 1, NULL, 'dashboard/route/22', 'fa fa-home', 'yellow-lemon', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (23, 'Penjualan', 1, 22, 'Penjualan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (24, 'Setting', 1, NULL, 'dashboard/route/24', 'fa fa-cog', 'grey-gallery', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (25, 'Perusahaan', 1, 24, 'Setting_perusahaan/form', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."menu" VALUES (26, 'Distribusi', 1, NULL, 'dashboard/route/26', 'fa fa-truck', 'blue-oleo', NULL, NULL, NULL, NULL, NULL, NULL);

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
INSERT INTO "public"."migrations" VALUES (37);

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
-- Table structure for pembayaran_distribusi
-- ----------------------------
DROP TABLE IF EXISTS "public"."pembayaran_distribusi";
CREATE TABLE "public"."pembayaran_distribusi" (
  "id" int4 NOT NULL DEFAULT nextval('pembayaran_distribusi_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "nomor_tranaksi" varchar(255) COLLATE "pg_catalog"."default",
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
-- Table structure for pengiriman
-- ----------------------------
DROP TABLE IF EXISTS "public"."pengiriman";
CREATE TABLE "public"."pengiriman" (
  "id" int4 NOT NULL DEFAULT nextval('pengiriman_id_seq'::regclass),
  "supplier" int4 NOT NULL,
  "tanggal_kirim" timestamp(6) NOT NULL,
  "tujuan_pengiriman" varchar(255) COLLATE "pg_catalog"."default",
  "nomor_surat_jalan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "catatan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Table structure for pengiriman_detail
-- ----------------------------
DROP TABLE IF EXISTS "public"."pengiriman_detail";
CREATE TABLE "public"."pengiriman_detail" (
  "id" int4 NOT NULL DEFAULT nextval('pengiriman_detail_id_seq'::regclass),
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
-- Records of penjualan
-- ----------------------------
INSERT INTO "public"."penjualan" VALUES (1, '17001/DKJ/PJ/2017', 1, '2017-11-15 00:00:00', 75000, 0, 1, NULL, 75000, 1, '    ', '2', '', '', '2017-11-15 16:05:52', NULL, NULL, 1, NULL);
INSERT INTO "public"."penjualan" VALUES (2, '17002/DKJ/PJ/2017', 1, '2017-11-15 00:00:00', 45000, 0, 1, NULL, 45000, 1, '    ', '', '', '', '2017-11-15 16:06:21', NULL, NULL, 1, NULL);
INSERT INTO "public"."penjualan" VALUES (3, '17003/DKJ/PJ/2017', 1, '2017-11-15 00:00:00', 45000, 0, 1, NULL, 45000, 1, '    ', '', '', '', '2017-11-15 16:08:07', NULL, NULL, 1, NULL);
INSERT INTO "public"."penjualan" VALUES (4, '17004/DKJ/PJ/2017', 1, '2017-11-15 00:00:00', 75000, 0, 1, NULL, 75000, 1, '    ', '', '', '', '2017-11-15 16:13:50', NULL, NULL, 1, NULL);
INSERT INTO "public"."penjualan" VALUES (5, '17005/DKJ/PJ/2017', 1, '2017-11-15 00:00:00', 30055, 0, 1, NULL, 30055, 1, '    ', '', '', '', '2017-11-15 19:21:02', NULL, NULL, 1, NULL);

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
-- Records of penjualan_detail
-- ----------------------------
INSERT INTO "public"."penjualan_detail" VALUES (1, 1, 1, 2, 'fp', 15000, 9, 5, 75000, '2017-11-15 16:05:52', NULL, NULL, 1, NULL);
INSERT INTO "public"."penjualan_detail" VALUES (2, 2, 1, 2, 'fp', 15000, 9, 3, 45000, '2017-11-15 16:06:21', NULL, NULL, 1, NULL);
INSERT INTO "public"."penjualan_detail" VALUES (3, 3, 1, 2, 'fp', 15000, 9, 3, 45000, '2017-11-15 16:08:07', NULL, NULL, 1, NULL);
INSERT INTO "public"."penjualan_detail" VALUES (4, 4, 1, 2, 'fp', 15000, 9, 5, 75000, '2017-11-15 16:13:50', NULL, NULL, 1, NULL);
INSERT INTO "public"."penjualan_detail" VALUES (5, 5, 1, 44, 'fp', 55, 11, 1, 55, '2017-11-15 19:21:02', NULL, NULL, 1, NULL);
INSERT INTO "public"."penjualan_detail" VALUES (6, 5, 1, 2, 'fp', 15000, 4, 2, 30000, '2017-11-15 19:21:02', NULL, NULL, 1, NULL);

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
-- Records of perusahaan_bank
-- ----------------------------
INSERT INTO "public"."perusahaan_bank" VALUES (1, 'Suwitro', 'Mandiri', '9878798798', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."perusahaan_bank" VALUES (2, 'Suwitro', 'BCA', '2342335345', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for purchase_order
-- ----------------------------
DROP TABLE IF EXISTS "public"."purchase_order";
CREATE TABLE "public"."purchase_order" (
  "id" int4 NOT NULL DEFAULT nextval('purchase_order_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "nomor_transaksi" varchar COLLATE "pg_catalog"."default",
  "tanggal" timestamp(6) NOT NULL,
  "up" int4,
  "telepon" int4,
  "catatan" text COLLATE "pg_catalog"."default",
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
-- Table structure for sales_contract
-- ----------------------------
DROP TABLE IF EXISTS "public"."sales_contract";
CREATE TABLE "public"."sales_contract" (
  "id" int4 NOT NULL DEFAULT nextval('sales_contract_id_seq'::regclass),
  "nomor_do" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "customer" int4 NOT NULL,
  "supplier" int4,
  "nomor_sc" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tanggal" timestamp(6) NOT NULL,
  "nomor_pesanan" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_disetujui" timestamp(6),
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
-- Table structure for sales_contract_detail
-- ----------------------------
DROP TABLE IF EXISTS "public"."sales_contract_detail";
CREATE TABLE "public"."sales_contract_detail" (
  "id" int4 NOT NULL DEFAULT nextval('sales_contract_detail_id_seq'::regclass),
  "parent" int4 NOT NULL,
  "barang" int4 NOT NULL,
  "harga_dasar" float8 NOT NULL,
  "panjang" float8 NOT NULL,
  "finishing" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "harga_finishing" float8 NOT NULL,
  "ppn_status" int4 NOT NULL,
  "qty_order" int4 NOT NULL,
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

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
-- Table structure for status_distribusi
-- ----------------------------
DROP TABLE IF EXISTS "public"."status_distribusi";
CREATE TABLE "public"."status_distribusi" (
  "id" int4 NOT NULL DEFAULT nextval('status_distribusi_id_seq'::regclass),
  "status" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "deleted_at" timestamp(6),
  "created_by" int4,
  "updated_by" int4
)
;

-- ----------------------------
-- Records of status_distribusi
-- ----------------------------
INSERT INTO "public"."status_distribusi" VALUES (1, 'Penawaran diajukan', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."status_distribusi" VALUES (2, 'Penawaran dikonfirmasi', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."status_distribusi" VALUES (3, 'Kirim PO ke Supplier', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."status_distribusi" VALUES (4, 'PO diproses Supplier', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."status_distribusi" VALUES (5, 'Sebagian barang terkirim', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."status_distribusi" VALUES (6, 'Barang telah terkirim', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."status_distribusi" VALUES (7, 'Lunas', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."status_distribusi" VALUES (8, 'Closed', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."status_distribusi" VALUES (9, 'Dibatalkan', NULL, NULL, NULL, NULL, NULL);

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
-- Records of stok_barang
-- ----------------------------
INSERT INTO "public"."stok_barang" VALUES (2, 1, 44, '1', 55, 10, '2017-11-15 14:08:59', '2017-11-15 19:21:02', NULL, 1, 1);
INSERT INTO "public"."stok_barang" VALUES (1, 1, 2, '1', 15000, 2, '2017-11-15 13:38:32', '2017-11-15 19:21:02', NULL, 1, 1);

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
-- Records of supplier
-- ----------------------------
INSERT INTO "public"."supplier" VALUES (1, '999', '98798', '65', NULL, '543@utuyt.vvv', '', '2017-11-15 13:36:53', NULL, NULL, 1, NULL);

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
-- Records of tipe_barang
-- ----------------------------
INSERT INTO "public"."tipe_barang" VALUES (1, '777', '2017-11-15 13:37:06', NULL, NULL, 1, NULL);

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
INSERT INTO "public"."user_privilages" VALUES (1, 1, 2, 1, 1, 0, 0, NULL, '2017-11-14 13:52:12', '2017-11-15 20:39:11', NULL, 1, 1);
INSERT INTO "public"."user_privilages" VALUES (18, 1, 3, 0, 1, 0, 0, NULL, '2017-11-15 20:22:48', '2017-11-15 20:39:11', NULL, 1, 1);
INSERT INTO "public"."user_privilages" VALUES (5, 1, 9, 0, 1, 0, 0, NULL, NULL, '2017-11-15 20:39:11', NULL, NULL, 1);
INSERT INTO "public"."user_privilages" VALUES (6, 1, 10, 0, 1, 0, 0, NULL, NULL, '2017-11-15 20:39:11', NULL, NULL, 1);
INSERT INTO "public"."user_privilages" VALUES (7, 1, 11, 0, 1, 0, 0, NULL, NULL, '2017-11-15 20:39:11', NULL, NULL, 1);
INSERT INTO "public"."user_privilages" VALUES (9, 1, 12, 0, 1, 0, 0, NULL, NULL, '2017-11-15 20:39:11', NULL, NULL, 1);
INSERT INTO "public"."user_privilages" VALUES (14, 1, 14, 0, 1, 0, 0, NULL, NULL, '2017-11-15 20:39:11', NULL, NULL, 1);
INSERT INTO "public"."user_privilages" VALUES (15, 1, 15, 0, 1, 0, 0, NULL, NULL, '2017-11-15 20:39:11', NULL, NULL, 1);
INSERT INTO "public"."user_privilages" VALUES (16, 1, 16, 0, 1, 0, 0, NULL, NULL, '2017-11-15 20:39:11', NULL, NULL, 1);
INSERT INTO "public"."user_privilages" VALUES (17, 1, 17, 0, 1, 0, 0, NULL, NULL, '2017-11-15 20:39:11', NULL, NULL, 1);
INSERT INTO "public"."user_privilages" VALUES (19, 1, 20, 0, 1, 0, 0, NULL, '2017-11-15 20:22:48', '2017-11-15 20:39:11', NULL, 1, 1);
INSERT INTO "public"."user_privilages" VALUES (20, 1, 23, 0, 1, 0, 0, NULL, '2017-11-15 20:25:32', '2017-11-15 20:39:11', NULL, 1, 1);
INSERT INTO "public"."user_privilages" VALUES (21, 1, 25, 0, 1, 0, 0, NULL, '2017-11-15 20:39:11', NULL, NULL, 1, NULL);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."barang_id_seq"
OWNED BY "public"."barang"."id";
SELECT setval('"public"."barang_id_seq"', 2, true);
ALTER SEQUENCE "public"."barang_masuk_detail_id_seq"
OWNED BY "public"."barang_masuk_detail"."id";
SELECT setval('"public"."barang_masuk_detail_id_seq"', 3, true);
ALTER SEQUENCE "public"."barang_masuk_id_seq"
OWNED BY "public"."barang_masuk"."id";
SELECT setval('"public"."barang_masuk_id_seq"', 3, true);
ALTER SEQUENCE "public"."customer_id_seq"
OWNED BY "public"."customer"."id";
SELECT setval('"public"."customer_id_seq"', 2, true);
ALTER SEQUENCE "public"."finishing_barang_id_seq"
OWNED BY "public"."finishing_barang"."id";
SELECT setval('"public"."finishing_barang_id_seq"', 2, true);
ALTER SEQUENCE "public"."invoice_distribusi_id_seq"
OWNED BY "public"."invoice_distribusi"."id";
SELECT setval('"public"."invoice_distribusi_id_seq"', 2, false);
ALTER SEQUENCE "public"."menu_id_seq"
OWNED BY "public"."menu"."id";
SELECT setval('"public"."menu_id_seq"', 27, true);
ALTER SEQUENCE "public"."notifikasi_id_seq"
OWNED BY "public"."notifikasi"."id";
SELECT setval('"public"."notifikasi_id_seq"', 2, false);
ALTER SEQUENCE "public"."pembayaran_distribusi_id_seq"
OWNED BY "public"."pembayaran_distribusi"."id";
SELECT setval('"public"."pembayaran_distribusi_id_seq"', 2, false);
ALTER SEQUENCE "public"."pembayaran_penjualan_id_seq"
OWNED BY "public"."pembayaran_penjualan"."id";
SELECT setval('"public"."pembayaran_penjualan_id_seq"', 2, false);
ALTER SEQUENCE "public"."pengiriman_detail_id_seq"
OWNED BY "public"."pengiriman_detail"."id";
SELECT setval('"public"."pengiriman_detail_id_seq"', 2, false);
ALTER SEQUENCE "public"."pengiriman_id_seq"
OWNED BY "public"."pengiriman"."id";
SELECT setval('"public"."pengiriman_id_seq"', 2, false);
ALTER SEQUENCE "public"."penjualan_detail_id_seq"
OWNED BY "public"."penjualan_detail"."id";
SELECT setval('"public"."penjualan_detail_id_seq"', 7, true);
ALTER SEQUENCE "public"."penjualan_id_seq"
OWNED BY "public"."penjualan"."id";
SELECT setval('"public"."penjualan_id_seq"', 6, true);
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
SELECT setval('"public"."perusahaan_bank_id_seq"', 3, true);
ALTER SEQUENCE "public"."purchase_order_id_seq"
OWNED BY "public"."purchase_order"."id";
SELECT setval('"public"."purchase_order_id_seq"', 2, false);
ALTER SEQUENCE "public"."retur_penjualan_detail_id_seq"
OWNED BY "public"."retur_penjualan_detail"."id";
SELECT setval('"public"."retur_penjualan_detail_id_seq"', 2, false);
ALTER SEQUENCE "public"."retur_penjualan_id_seq"
OWNED BY "public"."retur_penjualan"."id";
SELECT setval('"public"."retur_penjualan_id_seq"', 2, false);
ALTER SEQUENCE "public"."s_user_id_seq"
OWNED BY "public"."s_user"."id";
SELECT setval('"public"."s_user_id_seq"', 2, true);
ALTER SEQUENCE "public"."sales_contract_detail_id_seq"
OWNED BY "public"."sales_contract_detail"."id";
SELECT setval('"public"."sales_contract_detail_id_seq"', 2, false);
ALTER SEQUENCE "public"."sales_contract_id_seq"
OWNED BY "public"."sales_contract"."id";
SELECT setval('"public"."sales_contract_id_seq"', 2, false);
ALTER SEQUENCE "public"."setting_pajak_id_seq"
OWNED BY "public"."setting_pajak"."id";
SELECT setval('"public"."setting_pajak_id_seq"', 2, true);
ALTER SEQUENCE "public"."setting_pajak_penjualan_id_seq"
OWNED BY "public"."setting_pajak_penjualan"."id";
SELECT setval('"public"."setting_pajak_penjualan_id_seq"', 2, true);
ALTER SEQUENCE "public"."setting_perusahaan_id_seq"
OWNED BY "public"."setting_perusahaan"."id";
SELECT setval('"public"."setting_perusahaan_id_seq"', 2, true);
ALTER SEQUENCE "public"."status_distribusi_id_seq"
OWNED BY "public"."status_distribusi"."id";
SELECT setval('"public"."status_distribusi_id_seq"', 10, true);
ALTER SEQUENCE "public"."stok_barang_id_seq"
OWNED BY "public"."stok_barang"."id";
SELECT setval('"public"."stok_barang_id_seq"', 3, true);
ALTER SEQUENCE "public"."supplier_bank_id_seq"
OWNED BY "public"."supplier_bank"."id";
SELECT setval('"public"."supplier_bank_id_seq"', 2, false);
ALTER SEQUENCE "public"."supplier_id_seq"
OWNED BY "public"."supplier"."id";
SELECT setval('"public"."supplier_id_seq"', 2, true);
ALTER SEQUENCE "public"."tipe_barang_id_seq"
OWNED BY "public"."tipe_barang"."id";
SELECT setval('"public"."tipe_barang_id_seq"', 2, true);
ALTER SEQUENCE "public"."tipe_user_id_seq"
OWNED BY "public"."tipe_user"."id";
SELECT setval('"public"."tipe_user_id_seq"', 3, true);
ALTER SEQUENCE "public"."user_privilages_id_seq"
OWNED BY "public"."user_privilages"."id";
SELECT setval('"public"."user_privilages_id_seq"', 22, true);

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
-- Primary Key structure for table invoice_distribusi
-- ----------------------------
ALTER TABLE "public"."invoice_distribusi" ADD CONSTRAINT "pk_invoice_distribusi" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table menu
-- ----------------------------
ALTER TABLE "public"."menu" ADD CONSTRAINT "pk_menu" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table notifikasi
-- ----------------------------
ALTER TABLE "public"."notifikasi" ADD CONSTRAINT "pk_notifikasi" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table pembayaran_distribusi
-- ----------------------------
ALTER TABLE "public"."pembayaran_distribusi" ADD CONSTRAINT "pk_pembayaran_distribusi" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table pembayaran_penjualan
-- ----------------------------
ALTER TABLE "public"."pembayaran_penjualan" ADD CONSTRAINT "pk_pembayaran_penjualan" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table pengiriman
-- ----------------------------
ALTER TABLE "public"."pengiriman" ADD CONSTRAINT "pk_pengiriman" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table pengiriman_detail
-- ----------------------------
ALTER TABLE "public"."pengiriman_detail" ADD CONSTRAINT "pk_pengiriman_detail" PRIMARY KEY ("id");

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
-- Primary Key structure for table purchase_order
-- ----------------------------
ALTER TABLE "public"."purchase_order" ADD CONSTRAINT "pk_purchase_order" PRIMARY KEY ("id");

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
-- Primary Key structure for table sales_contract
-- ----------------------------
ALTER TABLE "public"."sales_contract" ADD CONSTRAINT "pk_sales_contract" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table sales_contract_detail
-- ----------------------------
ALTER TABLE "public"."sales_contract_detail" ADD CONSTRAINT "pk_sales_contract_detail" PRIMARY KEY ("id");

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
-- Primary Key structure for table status_distribusi
-- ----------------------------
ALTER TABLE "public"."status_distribusi" ADD CONSTRAINT "pk_status_distribusi" PRIMARY KEY ("id");

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
-- Foreign Keys structure for table invoice_distribusi
-- ----------------------------
ALTER TABLE "public"."invoice_distribusi" ADD CONSTRAINT "invoice_distribusi_parent_fkey" FOREIGN KEY ("parent") REFERENCES "pengiriman" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table pembayaran_distribusi
-- ----------------------------
ALTER TABLE "public"."pembayaran_distribusi" ADD CONSTRAINT "pembayaran_distribusi_parent_fkey" FOREIGN KEY ("parent") REFERENCES "invoice_distribusi" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table pembayaran_penjualan
-- ----------------------------
ALTER TABLE "public"."pembayaran_penjualan" ADD CONSTRAINT "pembayaran_penjualan_parent_fkey" FOREIGN KEY ("parent") REFERENCES "penjualan" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table pengiriman
-- ----------------------------
ALTER TABLE "public"."pengiriman" ADD CONSTRAINT "pengiriman_supplier_fkey" FOREIGN KEY ("supplier") REFERENCES "supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table pengiriman_detail
-- ----------------------------
ALTER TABLE "public"."pengiriman_detail" ADD CONSTRAINT "pengiriman_detail_parent_fkey" FOREIGN KEY ("parent") REFERENCES "pengiriman" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pengiriman_detail" ADD CONSTRAINT "pengiriman_detail_sales_contract_detail_id_fkey" FOREIGN KEY ("sales_contract_detail_id") REFERENCES "sales_contract_detail" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pengiriman_detail" ADD CONSTRAINT "pengiriman_detail_sales_contract_id_fkey" FOREIGN KEY ("sales_contract_id") REFERENCES "sales_contract" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Foreign Keys structure for table purchase_order
-- ----------------------------
ALTER TABLE "public"."purchase_order" ADD CONSTRAINT "purchase_order_parent_fkey" FOREIGN KEY ("parent") REFERENCES "sales_contract" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Foreign Keys structure for table sales_contract
-- ----------------------------
ALTER TABLE "public"."sales_contract" ADD CONSTRAINT "sales_contract_customer_fkey" FOREIGN KEY ("customer") REFERENCES "customer" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."sales_contract" ADD CONSTRAINT "sales_contract_status_fkey" FOREIGN KEY ("status") REFERENCES "status_distribusi" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."sales_contract" ADD CONSTRAINT "sales_contract_supplier_fkey" FOREIGN KEY ("supplier") REFERENCES "supplier" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table sales_contract_detail
-- ----------------------------
ALTER TABLE "public"."sales_contract_detail" ADD CONSTRAINT "sales_contract_detail_barang_fkey" FOREIGN KEY ("barang") REFERENCES "barang" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."sales_contract_detail" ADD CONSTRAINT "sales_contract_detail_parent_fkey" FOREIGN KEY ("parent") REFERENCES "sales_contract" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

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
