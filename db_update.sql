CREATE TYPE loan_status_enum AS ENUM(
    'Pending', 'Approved', 'Rejected', 'Disbursed', 'Active', 'Closed', 'Overdue', 'Incomplete', 'In Review'
);

CREATE TABLE loan_status_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    loan_id INT NOT NULL,
    status loan_status_enum NOT NULL,
    remark TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (loan_id) REFERENCES loans(id)
);
