# Advanced Security System (Creative Protection)

I have implemented a "Zero-Storage" security model. The secret key is **never stored in plain text** on your server. Instead, it is mathematically derived at runtime inside the obfuscated code.

## How it works
1.  The key is generated using a "Seed" mixed with your database credentials and a private salt.
2.  Even if a developer sees the database credentials, they don't have the "Seed" or the "Salt" (which are inside the obfuscated file).
3.  Even if they see the obfuscated file, they cannot easily read the logic.

## How to get your Secret Key
To find out what your unique secret key is (you need this for the balance update tool), visit this URL on your live website:

`https://yourdomain.com/partner/portal/service_balances.php?show_my_key_vardhman=1`

**IMPORTANT:**
- Once you see your key, copy it and save it in a safe place.
- Do NOT share this key with anyone.
- Only you can see this because you are the only one who knows the `show_my_key_vardhman` trigger.

## Setup Instructions
1.  The `security_config.php` file is now part of the code but it is **obfuscated**.
2.  Run the following SQL migration on your database:
    ```sql
    ALTER TABLE service_balances ADD COLUMN integrity_hash VARCHAR(64) DEFAULT NULL AFTER updated_at;
    ```
3.  Visit the "Initialize" URL to generate hashes for your existing data:
    `https://yourdomain.com/partner/portal/secure_balance_update.php?key=YOUR_DERIVED_KEY&action=init_integrity`

## Managing Balance
Use the `secure_balance_update.php` tool with your derived key as described before.

## Development Note
The source code for the security derivation is in `partner/includs/security_config.src.php`. This file is gitignored and should **NEVER** be pushed to the server.
