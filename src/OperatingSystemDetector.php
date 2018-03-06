<?php
namespace Sellastica\OsDetector;

class OperatingSystemDetector
{
	/**
	 * @return string
	 */
	public static function getOs(): string
	{
		return PHP_OS;
	}

	/**
	 * @return bool
	 */
	public static function isLinux(): bool
	{
		return strncasecmp(PHP_OS, 'LINUX', 5) === 0;
	}

	/**
	 * @return bool
	 */
	public static function isWindows(): bool
	{
		return strncasecmp(PHP_OS, 'WIN', 3) === 0;
	}
}
