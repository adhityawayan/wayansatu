ALTER TABLE perusahaan_bank ADD COLUMN transaksi char(1);
ALTER TABLE perusahaan_bank ADD COLUMN pajak_stat char(1);

ALTER TABLE penjualan ADD COLUMN pajak_stat char(1) NULL;

ALTER TABLE sales_contract ADD COLUMN ppn FLOAT NULL;
ALTER TABLE sales_contract ADD COLUMN pajak_stat char(1) NULL;

ALTER TABLE pengiriman ADD COLUMN customer INTEGER NULL;
INSERT INTO menu (menu, "index", parent, url) VALUES('Pengiriman',1,26,'Pengiriman');
