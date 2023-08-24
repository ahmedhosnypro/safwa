<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Sync expirations task.
 *
 * @package   enrol_autoenrol
 * @copyright 2021 Roberto Pinna
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_autoenrol\task;

/**
 * Sync expirations task.
 *
 * @package   enrol_autoenrol
 * @copyright 2021 Roberto Pinna
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class sync_expirations extends \core\task\scheduled_task {

    /**
     * Name for this task.
     *
     * @return string
     */
    public function get_name() {
        return get_string('syncexpirationstask', 'enrol_autoenrol');
    }

    /**
     * Run task for syncing expirations.
     */
    public function execute() {
        $enrol = enrol_get_plugin('autoenrol');
        $trace = new \text_progress_trace();
        $enrol->sync_expirations($trace);
    }

}
