# bootstrap
sandbox to practice bootstrap

## Milestone 1 Feedback
Nice work on the Persona - this is much better. Putting this thought towards the users you want to target will help you make important decisions about your design, layout, and content choices going forward in Milestone 2a. Always keep your target audience in mind, what their needs and goals are, and YOUR goals for your website and your photography business. This is a great direction, and as someone who once worked in photo I'm really looking forward to what your design ideas are. :-)

There are still some points here that aren't quite 100% correct... the Use Case still doesn't address _how your Persona will use the website_. I do want to say that What you have in your Use Case is *great* because it speaks about your goals for the project in detail... but that should go in the "Goals" section above. 

I think maybe the users who visit your site would probably want to see a gallery of your work, and maybe might want a link to your Instagram account before they send you a DM either through social media or your contact form. Just some quick thoughts on your Use Case.

I think you definitely understand the direction and goals for your project and the users/clients you are looking for.  I think you're ready to move forward with Milestone 2a. I also think you'll definitely need an interactive gallery that is touch and swipe friendly... and I can help you with that.

Your project is set up right, and your HTML is looking good. There were a couple of very minor technical issues I wanted to point out, see Edits &amp; Suggestions below.

Your Milestone 1 passes at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) - but please move forward with Milestone 2a now because of time. Please also have a good look at the documentation and sample milestone here for examples on what we're looking for:

- https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/
- https://bootcamp-coders.cnm.edu/projects/personal/example/

### Edits &amp; Suggestions
- Missing `<meta charset="utf-8">` tag
- Recommended that you use the `target="_blank"` attribute on links that lead to an external web page. This attribute will open the link in a new tab.
- Line 1 should be `.DS_Store` in your .gitignore

## Milestone 2a feedback

Your directory structure looks great, and I'm glad to see that you've updated your gitignore, per Rochelle's suggestion.

Your HTML is well laid out, with great indentation, making it super easy to read. After running your site through [W3 Validator](https://validator.w3.org/nu/?acceptlanguage=&doc=https%3A%2F%2Fbootcamp-coders.cnm.edu%2F~gdavis42%2Fartrenai%2Fpublic_html%2Fdocumentation%2Fmileston-2.php) it seems you've left out an `alt` attribute on your `<img>` tag. Another thing I noticed is that you haven't closed out your `<body>` and `<html>` tags. It's important to always close a tag when it's expected to be closed, and in this case they're both expected to be closed. When in doubt, let PhpStorm do it's job by enabling auto-complete. It makes life **MUCH** easier.

I noticed that you also took Rochelle's advice, and focused mainly on a gallery feel to your site, with links to your social media pages, and a contact form at the bottom. Your wireframes look great, and I think they'll translate very well into a functional website. I'm looking forward to seeing the end result, as I think you can make your PWP really showcase your talent as a photographer.

After completing your updates, you're now at [tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're free to begin working on milestone 2b!

## Milestone 2b Feedback
Awesome work - this is looking beautiful! Your Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Notes left via Slack.

## PWP Milestone 3 Feedback
Congratulations on a PWP well done. You've created an attractive site that features your art and photography work in a beautiful and engaging way. Nice work on the mobile view - this can sometimes be tricky with carousels.

Your code looks great - nice work!

It looks like your contact form works correctly - check your email to see if you received my message. Now that I'm on my home laptop I see the reCAPTCHA error and lag issue you were talking about before. I think this may have something to do with latency on the part of your web host's mailserver, but I'm not 100% certain. I can help you take another look at your codebase just to be sure everything is in order - although everything looks great on GitHub.

Your Milestone 3 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

Your overall grade across all of your PWP Milestones is 30/40 points (75%).

- Milestone 1 - 20%: Tier I 10(0.2) = 2
- Milestone 2a - 20%: Tier II 20(0.2) = 4
- Milestone 2b - 10%: Tier IV 40(0.1) = 4
- Milestone 3 - 50%: Tier IV 40(0.5) = 20

### Edits &amp; Suggestions
- Think about adding a favicon! We didn't cover this in class (ran out of time) - but have a look at this tool that will generate a set of favicons automatically: https://realfavicongenerator.net/
- Nice work keeping your images at a reasonable file size without losing too much quality. There is only one image that might be a bit too big... your profile pic clocks in at 1.8MB (it does load just a little slow on mobile for me).
- Consider using a swipe-enabled carousel for a better UX on mobile down the line.
- The script you have to collapse the nabvar on click for mobile needs a little fixing. Here's a starting point... but you'll need to work this so that it doens't conflict with the "Gallery" button. (You could add some additional classes, or alternatively fire the function only on select links via `onclick` on the `<a>` tag. Just 2 simple ideas.)
```
$('...').click(function(){
	$('.navbar-collapse').removeClass("show");
	$('.navbar-collapse').addClass("collapse");
});
```
