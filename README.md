# Font Colors in Craft Richtext-Field

Based on imperavis new Redactor II compatible [Font Color Plugin](http://imperavi.com/redactor/plugins/font-color/)

# Installation

Install plugin (copy redactorfontcolor folder to your craft plugins directory and install it in the CP)

Add "fontcolor" at "plugins": ["..."] to Redactor Settings at /craft/config/redactor/

my Standard.json looks like this

```
{
	"buttons": ["format","bold","italic","lists","link","file","horizontalrule"],
	"plugins": ["fontcolor","source","fullscreen"]
}
```

Choose your configured json setting in the regarding field setting and uncheck 'Clean up HTML'
