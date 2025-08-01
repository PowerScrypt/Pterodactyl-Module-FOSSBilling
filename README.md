# Pterodactyl Module for FOSSBilling

A free and open-source module that connects **Pterodactyl** with **FOSSBilling**, allowing you to automate game server provisioning, management, and suspension directly from your FOSSBilling panel. This module is designed to streamline hosting operations and provide a seamless experience for both providers and their clients.

## ✨ Features

* ✅ **Automatic Server Provisioning** – Deploy servers instantly after payment confirmation.
* ✅ **Suspend / Unsuspend Servers** – Automatic suspension for overdue invoices and instant reactivation on payment.
* ✅ **Multiple Node Support** – Assign products to specific Pterodactyl nodes.
* ✅ **Custom Resource Allocation** – Configure CPU, RAM, disk, and other limits per product plan.
* ✅ **Client Panel Access** – Clients can see their server details directly in FOSSBilling.

## 📦 Requirements

* [FOSSBilling](https://fossbilling.org/) (latest stable version)
* [Pterodactyl](https://pterodactyl.io/) (latest stable version)
* A working Pterodactyl API key (application API)

## ⚙️ Installation

1. **Download the module** or clone the repository:

   ```bash
   git clone https://github.com/Athenox14/Pterodactyl-Module-FOSSBilling.git
   ```
2. **Upload the module** to your FOSSBilling `/modules/` directory.
3. **Activate the module** from the FOSSBilling admin panel.
4. **Configure your Pterodactyl credentials** (API URL and keys) in the module settings.
5. **Create products** in FOSSBilling linked to your Pterodactyl servers and plans.

## 🛠 Roadmap

* [ ] Automatic server deletion on order cancellation
* [ ] Support for custom egg variables
* [ ] Client-side server actions (restart, stop, reinstall)
* [ ] WHMCS-style configurable options for resources

## 🤝 Contributing

Pull requests and feature suggestions are welcome!

1. Fork the repo
2. Create a feature branch
3. Submit a PR

## 👨‍💻 About

This module is developed and maintained by **[Athenox Development](https://athenox.dev)**, a French Development company.

* 🌐 Website: [athenox.dev](https://athenox.dev)
* 💬 Discord: [Join our community](https://discord.gg/CXZvfDPnBh)
* 📧 Contact: `contact [at] athenox.dev` *(for custom FOSSBilling modules or Pterodactyl Blueprint addons)*

If you need **custom modules for FOSSBilling** or **addons for Pterodactyl Blueprint**, don’t hesitate to get in touch!

## 📜 License

This module is licensed under the **MIT License**. See [LICENSE](LICENSE) for details.
