<?php namespace BackupManager\Laravel;

use Illuminate\Console\Command;

/**
 * Class Laravel5DbBackupCommand
 * @package BackupManager\Laravel
 */
class Laravel5DbBackupCommand extends DbBackupCommand {
    use Laravel51Compatibility;
}
