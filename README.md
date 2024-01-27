# PHP Color Class

The PHP Color class is a versatile utility for handling HTML color values. It provides a simple interface for working with color properties such as name, RGB, HSL, and alpha.

## Features

- Conversion between color representations: name, hex, RGB, RGBA, HSL, HSLA.
- Getters and setters for individual color components: red, green, blue, hue, saturation, lightness, alpha.
- Supports common color names as defined in the HTML color specification.
- Exception handling for invalid color inputs.

## Usage

### Initialization

```
// Initialize with a color value
$myColor = new Color('blue');
```

### Getters and Setters

```
// Get color name
$name = $myColor->get_name();

// Set color name
$myColor->set_name('green');

// Get and set individual components
$red = $myColor->get_red();
$myColor->set_red(255);

$green = $myColor->get_green();
$myColor->set_green(128);

$blue = $myColor->get_blue();
$myColor->set_blue(0);

$hue = $myColor->get_hue();
$myColor->set_hue(180);

$saturation = $myColor->get_saturation();
$myColor->set_saturation(50);

$lightness = $myColor->get_lightness();
$myColor->set_lightness(75);
```

### Formatting

```
// Format color in different representations
$nameFormat = $myColor->format('name');
$hexFormat = $myColor->format('hex');
$rgbaFormat = $myColor->format('rgba');
$hslFormat = $myColor->format('hsl');
```

### Examples

```
// Example: Initializing with a hex value
$myColor = new Color('#ff0000');

// Example: Setting RGB values
$myColor->set_red(128);
$myColor->set_green(255);
$myColor->set_blue(0);

// Example: Formatting the color
$hexFormat = $myColor->format('hex'); // Outputs: #80ff00
```

### Exception Handling
The `ColorException` class is thrown for invalid color inputs. Make sure to handle exceptions appropriately in your code.

```
try {
    $invalidColor = new Color('invalid_color');
} catch (ColorException $e) {
    // Handle the exception (e.g., log, display an error message)
    echo 'Error: ' . $e->getMessage();
}
```

### License
This PHP Color class is released under the Apache License 2.0.
