# Secrets template for 1Password CLI
# Usage: ./deploy/dep <command> <environment>
#
# Replace "Vault/item" with your 1Password vault and item names
# Example: op://DevOps/myapp-production/password

DEPLOYER_SUDO_PASS=op://Devops/pixaproof/sudo-password
DEPLOYER_DB_PASSWORD=op://Devops/pixaproof/db-password
DEPLOYER_APP_KEY=op://Devops/moojing-global/$DEPLOYER_ENV-app-key

# Optional secrets (add more as needed)
# DEPLOYER_MAIL_PASSWORD=op://Vault/item/mail-password
# DEPLOYER_AWS_SECRET=op://Vault/item/aws-secret
