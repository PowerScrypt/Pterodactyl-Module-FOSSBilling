<?php

/**
 * Copyright 2022-2025 FOSSBilling
 * Copyright 2011-2021 BoxBilling, Inc.
 * SPDX-License-Identifier: Apache-2.0.
 *
 * @copyright FOSSBilling (https://www.fossbilling.org)
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 */

namespace Box\Mod\Servicepterodactyl\Api;

class Guest extends \Api_Abstract
{
    /**
     * Gets server information from Pterodactyl
     *
     * @param array $data
     *                    - 'server_id' What server ID to check
     */
    public function server_info($data)
    {
        if (empty($data['server_id'])) {
            throw new \FOSSBilling\Exception('Server ID is required');
        }
        
        return $this->getService()->getServerInfo($data['server_id']);
    }

    /**
     * Checks server status on Pterodactyl
     *
     * @param array $data
     *                    - 'server_id' What server ID to check
     */
    public function server_status($data)
    {
        if (empty($data['server_id'])) {
            throw new \FOSSBilling\Exception('Server ID is required');
        }
        
        return $this->getService()->getServerStatus($data['server_id']);
    }
}
