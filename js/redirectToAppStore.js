/**
 * Created with JetBrains PhpStorm.
 * User: szatan
 * Date: 11.09.13
 * Time: 14:40
 * To change this template use File | Settings | File Templates.
 */
var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false );
if(iOS) {
	window.location = 'https://itunes.apple.com/pl/app/how-are-you-mood-tracker/id691974213?mt=8';
}
