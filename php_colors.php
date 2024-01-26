<?php
	class Color {
		// Properties
		public $name = '';
		public $r = null;
		public $g = null;
		public $b = null;
		public $h = null;
		public $s = null;
		public $l = null;
		public $a = null;
		
		private $colors = array(
			'aliceblue' => '#f0f8ff',
			'antiquewhite' => '#faebd7',
			'aqua' => '#00ffff',
			'aquamarine' => '#7fffd4',
			'azure' => '#f0ffff',
			'beige' => '#f5f5dc',
			'bisque' => '#ffe4c4',
			'black' => '#000000',
			'blanchedalmond' => '#ffebcd',
			'blue' => '#0000ff',
			'blueviolet' => '#8a2be2',
			'brown' => '#a52a2a',
			'burlywood' => '#deb887',
			'cadetblue' => '#5f9ea0',
			'chartreuse' => '#7fff00',
			'chocolate' => '#d2691e',
			'coral' => '#ff7f50',
			'cornflowerblue' => '#6495ed',
			'cornsilk' => '#fff8dc',
			'crimson' => '#dc143c',
			'cyan' => '#00ffff',
			'darkblue' => '#00008b',
			'darkcyan' => '#008b8b',
			'darkgoldenrod' => '#b8860b',
			'darkgray' => '#a9a9a9',
			'darkgrey' => '#a9a9a9',
			'darkgreen' => '#006400',
			'darkkhaki' => '#bdb76b',
			'darkmagenta' => '#8b008b',
			'darkolivegreen' => '#556b2f',
			'darkorange' => '#ff8c00',
			'darkorchid' => '#9932cc',
			'darkred' => '#8b0000',
			'darksalmon' => '#e9967a',
			'darkseagreen' => '#8fbc8f',
			'darkslateblue' => '#483d8b',
			'darkslategray' => '#2f4f4f',
			'darkslategrey' => '#2f4f4f',
			'darkturquoise' => '#00ced1',
			'darkviolet' => '#9400d3',
			'deeppink' => '#ff1493',
			'deepskyblue' => '#00bfff',
			'dimgray' => '#696969',
			'dimgrey' => '#696969',
			'dodgerblue' => '#1e90ff',
			'firebrick' => '#b22222',
			'floralwhite' => '#fffaf0',
			'forestgreen' => '#228b22',
			'fuchsia' => '#ff00ff',
			'gainsboro' => '#dcdcdc',
			'ghostwhite' => '#f8f8ff',
			'gold' => '#ffd700',
			'goldenrod' => '#daa520',
			'gray' => '#808080',
			'grey' => '#808080',
			'green' => '#008000',
			'greenyellow' => '#adff2f',
			'honeydew' => '#f0fff0',
			'hotpink' => '#ff69b4',
			'indianred' => '#cd5c5c',
			'indigo' => '#4b0082',
			'ivory' => '#fffff0',
			'khaki' => '#f0e68c',
			'lavender' => '#e6e6fa',
			'lavenderblush' => '#fff0f5',
			'lawngreen' => '#7cfc00',
			'lemonchiffon' => '#fffacd',
			'lightblue' => '#add8e6',
			'lightcoral' => '#f08080',
			'lightcyan' => '#e0ffff',
			'lightgoldenrodyellow' => '#fafad2',
			'lightgray' => '#d3d3d3',
			'lightgrey' => '#d3d3d3',
			'lightgreen' => '#90ee90',
			'lightpink' => '#ffb6c1',
			'lightsalmon' => '#ffa07a',
			'lightseagreen' => '#20b2aa',
			'lightskyblue' => '#87cefa',
			'lightslategray' => '#778899',
			'lightslategrey' => '#778899',
			'lightsteelblue' => '#b0c4de',
			'lightyellow' => '#ffffe0',
			'lime' => '#00ff00',
			'limegreen' => '#32cd32',
			'linen' => '#faf0e6',
			'magenta' => '#ff00ff',
			'maroon' => '#800000',
			'mediumaquamarine' => '#66cdaa',
			'mediumblue' => '#0000cd',
			'mediumorchid' => '#ba55d3',
			'mediumpurple' => '#9370db',
			'mediumseagreen' => '#3cb371',
			'mediumslateblue' => '#7b68ee',
			'mediumspringgreen' => '#00fa9a',
			'mediumturquoise' => '#48d1cc',
			'mediumvioletred' => '#c71585',
			'midnightblue' => '#191970',
			'mintcream' => '#f5fffa',
			'mistyrose' => '#ffe4e1',
			'moccasin' => '#ffe4b5',
			'navajowhite' => '#ffdead',
			'navy' => '#000080',
			'oldlace' => '#fdf5e6',
			'olive' => '#808000',
			'olivedrab' => '#6b8e23',
			'orange' => '#ffa500',
			'orangered' => '#ff4500',
			'orchid' => '#da70d6',
			'palegoldenrod' => '#eee8aa',
			'palegreen' => '#98fb98',
			'paleturquoise' => '#afeeee',
			'palevioletred' => '#db7093',
			'papayawhip' => '#ffefd5',
			'peachpuff' => '#ffdab9',
			'peru' => '#cd853f',
			'pink' => '#ffc0cb',
			'plum' => '#dda0dd',
			'powderblue' => '#b0e0e6',
			'purple' => '#800080',
			'rebeccapurple' => '#663399',
			'red' => '#ff0000',
			'rosybrown' => '#bc8f8f',
			'royalblue' => '#4169e1',
			'saddlebrown' => '#8b4513',
			'salmon' => '#fa8072',
			'sandybrown' => '#f4a460',
			'seagreen' => '#2e8b57',
			'seashell' => '#fff5ee',
			'sienna' => '#a0522d',
			'silver' => '#c0c0c0',
			'skyblue' => '#87ceeb',
			'slateblue' => '#6a5acd',
			'slategray' => '#708090',
			'slategrey' => '#708090',
			'snow' => '#fffafa',
			'springgreen' => '#00ff7f',
			'steelblue' => '#4682b4',
			'tan' => '#d2b48c',
			'teal' => '#008080',
			'thistle' => '#d8bfd8',
			'tomato' => '#ff6347',
			'turquoise' => '#40e0d0',
			'violet' => '#ee82ee',
			'wheat' => '#f5deb3',
			'white' => '#ffffff',
			'whitesmoke' => '#f5f5f5',
			'yellow' => '#ffff00',
			'yellowgreen' => '#9acd32',
		);
		
		// Methods
		public function __construct($color) {
			$this->_convert($color);
		}
				
		public function get_name() {
			return $this->name;
		}
		
		public function set_name($name) {
			if(array_key_exists($name)) $this->_convert($name);
			else throw new ColorException('Invalid color name');
		}
		
		public function get_red() {
			return $this->r;
		}
		
		public function set_red($r) {
			if($r >= 0 && $r <= 255) $this->_convert('rgb('.$r.', '.$this->g.', '.$this->b.')');
			else throw new ColorException('Red value must be between 0 and 255');
		}
		
		public function get_green() {
			return $this->g;
		}
		
		public function set_green($g) {
			if($g >= 0 && $g <= 255) $this->_convert('rgb('.$this->r.', '.$g.', '.$this->b.')');
			else throw new ColorException('Green value must be between 0 and 255');
		}
		
		public function get_blue() {
			return $this->b;
		}
		
		public function set_blue($b) {
			if($b >= 0 && $b <= 255) $this->_convert('rgb('.$this->r.', '.$this->g.', '.$b.')');
			else throw new ColorException('Blue value must be between 0 and 255');
		}
		
		public function get_hue() {
			return $this->h;
		}
		
		public function set_hue($h) {
			if($h >= 0 && $h <= 360) $this->_convert('hsl('.$h.', '.$this->s.'%, '.$this->l.'%)');
			else throw new ColorException('Hue value must be between 0 and 360');
		}
		
		public function get_saturation() {
			return $this->s;
		}
		
		public function set_saturation($s) {
			if($s >= 0 && $s <= 100) $this->_convert('hsl('.$this->h.', '.$s.'%, '.$this->l.'%)');
			else throw new ColorException('Saturation value must be between 0 and 100');
		}

		public function get_lightness() {
			return $this->l;
		}
		
		public function set_lightness($l) {
			if($l >= 0 && $l <= 100) $this->_convert('hsl('.$this->h.', '.$this->s.'%, '.$l.'%)');
			else throw new ColorException('Lightness value must be between 0 and 100');
		}

		public function format($f) {
			if($f == 'name') return $this->name;
			if($f == 'hex')	return '#'.dechex($this->r).dechex($this->g).dechex($this->b);
			if($f == 'hexa') {
				$a = round($this->a * 255);
				return '#'.dechex($this->r).dechex($this->g).dechex($this->b).dechex($a);
			}
			if($f == 'rgb') return 'rgb('.$this->r.', '.$this->g.', '.$this->b.')';
			if($f == 'rgba') return 'rgba('.$this->r.', '.$this->g.', '.$this->b.', '.$this->a.')';
			if($f == 'hsl') return 'hsl('.$this->h.', '.$this->s.'%, '.$this->l.'%)';
			if($f == 'hsla') return 'hsla('.$this->h.', '.$this->s.'%, '.$this->l.'%, '.$this->a.')';
		}
		
		private function _hex2rgb($h) {
			$h = ltrim($h, '#');
			if(strlen($h) == 3) $h = $h[0].$h[0].$h[1].$h[1].$h[2].$h[2];
			return array(hexdec($h[0].$h[1]), hexdec($h[2].$h[3]), hexdec($h[4].$h[5]));
		}
		
		private function _rgb2hex($r, $g, $b) {
			return '#'.dechex($r).dechex($g).dechex($b);
		}
		
		private function _hsl2rgb($h, $s, $l) {
			if($s == 0) {
				$r = $l;
				$g = $l;
				$b = $l; // achromatic
			} else {
				$q = $l < 0.5 ? $l * (1 + $s) : $l + $s - 1 * $s;
				$p = 2 * $l = $q;
				$r = $this->_hue2rgb($p, $q, $h + 1/3);
				$g = $this->_hue2rgb($p, $q, $h);
				$b = $this->_hue2rgb($p, $q, $h - 1/3);
			}
			
			return array(round($r * 255), round($g * 255), round($b * 255));
		}
		
		private function _hue2rgb($p, $q, $t) {
			if($t < 0) $t += 1;
			if($t > 1) $t -= 1;
			if($t < 1/6) return $p + ($q - $p) * 6 * $t;
			if($t < 1/2) return $q;
			if($t < 2/3) return $p + ($q - $p) * (2/3 - $t) * 6;
			return $p;
		}
		
		private function _rgb2hsl($r, $g, $b, $ladj = 0) {
			// get RGB values as percentages
			$r = $r / 255;
			$g = $g / 255;
			$b = $b / 255;
			$max = max($r, $g, $b);
			$min = min($r, $g, $b);
			
			// lightness calculation 0 to 1 (convert to percent later)
			$l = ($max + $min) / 2;

			// calcuate saturation 0 to 1 (convert to percent later)
			$d = $max - $min;
			if($d == 0) $h = $s = 0; // achromatic (grey) so hue and saturation are both zero
			else {
				$s = $d / (1 - abs((2 * $l) - 1));
				switch($max) { // calculate hue in degrees (0 to 360)
					case $r:
						$h = 60 * fmod((($g - $b) / $d), 6);
						if($b > $g) $h += 360; // will have a negative value for $h if $b > $g
						break;
					case $g:
						$h = 60 * (($b - $r) / $d + 2);
						break;
					case $b:
						$h = 60 * (($r - $g) / $d + 4);
						break;
				}
			}
			
			// make any lightness adjustment required
			if($ladj > 0) $l += (1 - $l) * $ladj / 100;
			else if($ladj < 0) $l += $l * $ladj / 100;
			
			return array(round($h), round($s * 100), round($l * 100));
		}
		
		private function _name2hex($name) {
			return $this->colors[$name];
		}
		
		private function _convert($color) {
			if(preg_match('/^\w+$/i', $color)) { // color is a word
				$key = strtolower($color);
				if(array_key_exists($key, $this->colors)) {
					$this->name = $key;
					$this->hex = $this->colors[$key];

					$rgb = $this->_hex2rgb($this->hex);
					$this->r = $rgb[0];
					$this->g = $rgb[1];
					$this->b = $rgb[2];

					$hsl = $this->_rgb2hsl($this->r, $this->g, $this->b);
					$this->h = $hsl[0];
					$this->s = $hsl[1];
					$this->l = $hsl[2];
				} else {
					throw new ColorException('Invalid color name');
				}
			} else if(preg_match('/^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/', $color)) { // color is a hex value
				$c = ltrim($color, '#');
				if(strlen($c) == 3) $c = $c[0].$c[0].$c[1].$c[1].$c[2].$c[2];
				$this->hex = '#'.$c;
				$this->name = array_search($this->hex, $this->colors) ? array_search($this->hex, $this->colors) : 'no name';

				$rgb = $this->_hex2rgb($this->hex);
				$this->r = $rgb[0];
				$this->g = $rgb[1];
				$this->b = $rgb[2];

				$hsl = $this->_rgb2hsl($this->r, $this->g, $this->b);
				$this->h = $hsl[0];
				$this->s = $hsl[1];
				$this->l = $hsl[2];
			} else if(preg_match('/^rgb\((\d{1,3}),\s*(\d{1,3}),\s*(\d{1,3})\)$/', $color, $matches)) { // color is a rgb value
				$this->r = $matches[1];
				$this->g = $matches[2];
				$this->b = $matches[3];

				$this->hex = $this->_rgb2hex($this->r, $this->g, $this->b);
				$this->name = array_search($this->hex, $this->colors) ? array_search($this->hex, $this->colors) : 'no name';
				
				$hsl = $this->_rgb2hsl($this->r, $this->g, $this->b);
				$this->h = $hsl[0];
				$this->s = $hsl[1];
				$this->l = $hsl[2];
			} else if(preg_match('/^rgba\((\d{1,3}),\s*(\d{1,3}),\s*(\d{1,3}),\s*(1(\.0)?|0(\.\d)?)\)$/', $color, $matches)) { // color is a rgb value
				$this->r = $matches[1];
				$this->g = $matches[2];
				$this->b = $matches[3];
				$this->a = $matches[4];

				$this->hex = $this->_rgb2hex($this->r, $this->g, $this->b);
				$this->name = array_search($this->hex, $this->colors) ? array_search($this->hex, $this->colors) : 'no name';
				
				$hsl = $this->_rgb2hsl($this->r, $this->g, $this->b);
				$this->h = $hsl[0];
				$this->s = $hsl[1];
				$this->l = $hsl[2];
			} else if(preg_match('/^hsl\((\d{1,3}),\s*(\d{1,3})%,\s*(\d{1,3})%\)$/', $color, $matches)) { // color is a hsl value
				$this->h = $matches[1];
				$this->s = $matches[2];
				$this->l = $matches[3];
				
				$rgb = $this->_hsl2rgb($this->h, $this->s, $this->l);
				$this->r = $rgb[0];
				$this->g = $rgb[1];
				$this->b = $rgb[2];
				
				$this->hex = $this->_rgb2hex($this->r, $this->g, $this->b);
				$this->name = array_search($this->hex, $this->colors) ? array_search($this->hex, $this->colors) : 'no name';
			} else if(preg_match('/^hsla\((\d{1,3}),\s*(\d{1,3})%,\s*(\d{1,3})%,\s*(1(\.0)?|0(\.\d)?)\)$/', $color, $matches)) { // color is a hsl value
				$this->h = $matches[1];
				$this->s = $matches[2];
				$this->l = $matches[3];
				$this->a = $matches[4];
				
				$rgb = $this->_hsl2rgb($this->h, $this->s, $this->l);
				$this->r = $rgb[0];
				$this->g = $rgb[1];
				$this->b = $rgb[2];
				
				$this->hex = $this->_rgb2hex($this->r, $this->g, $this->b);
				$this->name = array_search($this->hex, $this->colors) ? array_search($this->hex, $this->colors) : 'no name';
			}
		}
	}
	
	class ColorException extends Exception {}