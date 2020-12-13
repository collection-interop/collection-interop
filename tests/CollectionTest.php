<?php
declare(strict_types=1);

namespace Interop\Collection;

use Interop\Collection\Collection;
use PHPUnit\Framework\TestCase;

/**
 * @covers Collection::
 */
class CollectionTest extends TestCase
{
	/**
	 * @test
	 */
	public function can_be_implemented(): void
	{
		$exists = interface_exists(Collection::class);

		$this->assertTrue($exists);
	}
}
