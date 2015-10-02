# FuckIt (php)
Because you're an amazing programmer who doesn't need to be distracted by errors and exceptions.

## Introduction
Look, everybody knows that exceptions are there to annoy us. We're great
programmers and we know it, we don't need some exception telling us any
different.

Exceptions are evil. My friend once caught an exception, and now he's blind
in one eye, walks with a limp, and the letters "p", "h" and "p" are now
completely gone from his vocabulary. You know how hard it is write amazing
software without those three letters? It's pretty difficult.

Here is an actual quote from my friend:

> I wish I had installed this library sooner

Don't hesitate, 'cause your love won't wait. Oh baby I love your way, everyday, yeeyeeh.

Inspired by [fuckitjs](https://github.com/mattdiamond/fuckitjs) and [fuckitpy](https://github.com/ajalt/fuckitpy)
who both did a much better job than me.

## Installation

    composer require martinph/fuckitphp
    

## Usage

Life would be much easier if you include the handy `fuckit` function.

    use function FuckIt\fuckit as fuckit;
    
The rest of the documentation will assume you've done this because it looks cool.

### Error handlers
If you really don't care about any errors, just use the fuckit error and exception handlers.

    set_error_handler(['\FuckIt\FuckIt', 'errorHandler']);
    set_exception_handler(['\FuckIt\FuckIt', 'exceptionHandler']);
    
### Objects
Wrap your objects in our warm `fuckit` function blanket, and it will absorb all those 
pesky exceptions for you. You can than use your original object as you would normally.

Take this example of a bank transfer. We construct our transfer object, and then want
to `execute()` the transfer without being told about any potential errors. Why? Because
nobody cares.

    /** @var Transfer $bankTransfer **/
    $bankTransfer = fuckit(new Transfer($payer, $payee, 1000000));
    $bankTransfer->execute();
    
Any exceptions for setting or getting properties are silenced too.

    echo $bankTransfer->result;
    
### Callables
Exceptions in callables? Time to shut them the fuck up.

    fuckit(function () use ($somethingImportant) {
        throw new \Exception("Oh shit!");
    });
    
Exception? What exception? Man, you're a badass.

## Testing
Who gives a shit about testing, really? Alright, whatever.

    ./vendor/bin/phpunit

## FAQ
Here's some frequently asked questions about this library.

### Should I use this library?
No. Please don't.

### Is your friend real?
Yeah.

### Honestly?
No. I have no friends. :(

### I want to contribute, how can I do so?
Create a pull request. :)
