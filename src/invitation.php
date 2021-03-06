<?php

namespace Kprovorov\Invi;

/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2016 Atbox
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
 * OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
 * AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package    Invi
 * @version    0.8.13 l5
 * @author     Sajjad Rad [sajjad.273@gmail.com]
 * @license    MIT License (3-clause)
 * @copyright  (c) 2016
 * @link       http://atbox.io/pages/opensource
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Invitation extends Model
{
	use Notifiable;
	
	protected $table = 'invitations';
	protected $fillable = array('code','email','expiration','active','used', 'data');

	public function getDataAttribute($value)
    {
        return unserialize($value);
    }

	public function setDataAttribute($value)
	{
		$this->attributes['data'] = serialize($value);
	}
}
