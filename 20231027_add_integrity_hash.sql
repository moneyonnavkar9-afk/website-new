ALTER TABLE service_balances ADD COLUMN integrity_hash VARCHAR(64) DEFAULT NULL AFTER updated_at;
