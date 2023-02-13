<?php
/**
 * This file is part of the MediaWiki skin Chameleon.
 *
 * @copyright 2022, gesinn-it-wam
 * @license   GPL-3.0-or-later
 *
 * The Chameleon skin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by the Free
 * Software Foundation, either version 3 of the License, or (at your option) any
 * later version.
 *
 * The Chameleon skin is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * @file
 * @ingroup Skins
 */

namespace Skins\Chameleon\Tests\Unit\Components;

use Message;
use Skins\Chameleon\ChameleonTemplate;
use Skins\Chameleon\Components\ContentHeader;

/**
 * @coversDefaultClass \Skins\Chameleon\Components\ContentHeader
 * @covers ::<private>
 * @covers ::<protected>
 *
 * @group   skins-chameleon
 * @group   mediawiki-databaseless
 *
 * @author gesinn-it-wam
 * @since 4.2
 * @ingroup Skins
 * @ingroup Test
 */
class ContentHeaderTest extends GenericComponentTestCase {

	protected $classUnderTest = ContentHeader::class;

	/**
	 * @covers ::getHtml
	 * @throws \MWException
	 */
	public function testGetHtml_TitleDisplayed() {
		$chameleonTemplate = $this->createStub( ChameleonTemplate::class );
		$chameleonTemplate->method( 'get' )->willReturnMap([['title', null, 'SomeTitle']]);
		$chameleonTemplate->method( 'getMsg' )->willReturn(new Message(''));
		$instance = new $this->classUnderTest( $chameleonTemplate, null );

		$html = $instance->getHtml();

		$this->assertStringContainsString( 'SomeTitle', $html );
	}

}
