## Usage

1. **Database Setup**:
   - Configure your database connection in `config/database.php`.
   - Run `scripts/create_table.php` to create the necessary `invoices` table in your database.
   - Run `scripts/seed_data.php` to populate the `invoices` table with initial data.

2. **Display Invoice Table**:
   - Access `public/index.php` in your web browser (`http://localhost/BMC_test_assessment/public/index.php`) to view the invoice table.
   - The table will display invoices fetched from the database with calculated totals.

3. **Files and Scripts**:
   - `config/database.php`: Configure database connection settings.
   - `functions/calculate_total.php`: Function to calculate invoice totals.
   - `scripts/create_table.php`: Script to create `invoices` table.
   - `scripts/seed_data.php`: Script to seed initial data into `invoices` table.
   - `scripts/fetch_invoices.php`: Script to fetch invoices from database.
   - `scripts/update_invoices.php`: Script to update invoice totals in database.
   - `public/index.php`: HTML/PHP file to display the invoice table.

