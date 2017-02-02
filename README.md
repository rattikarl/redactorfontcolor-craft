# Font Colors in Craft Richtext-Field

Based on [Redactor font-color plugin](http://imperavi.com/redactor/plugins/font-color/)

# Installation

Install plugin (copy redactofontcolor folder to your craft plugins directory and install it in the CP}
Add "fontcolor" at "plugins": ["..."]

to Redactor Settings at /craft/config/redactor/

my Standard.json looks like this

```
{
	"buttons": ["format","bold","italic","lists","link","file","horizontalrule"],
	"plugins": ["fontcolor","source","fullscreen"]
}
```

Choose your configured Json setting in the regarding field setting and uncheck 'Clean up HTML'
