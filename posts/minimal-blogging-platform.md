I find it hard to look back at code that I wrote more than a couple of months ago. This is because as a rule, I have been learning and improving my skills at a fairly rapid pace since I started learning to code. To look back on my _old_ code is a regret filled affair and something that I'm sure most programmers (or any creative) can relate too. I'll just take it as a good sign of progress.

On my most recently shipped project I think the most regret I had was from not striving for **minimum viable product**. Instead, filled with ideas for features and tricks, I tried to build everything at once. I shipped the project, thankfully. Though I wonder how much better of a solution and experience developing it would have been had I followed **MVP**.

So in response to this I decided to build a blogging platform. _The blogging platform this is hosted on currently_. Trying my best to do a little as possible. And here, in less than 100 lines of php, not counting Emanuil Rusev's [Parsedown Library](http://parsedown.org), I can present MBP (Minimal Blogging Platform). Perhaps it is due a better name?

The premise is simple. At the root of the webpage MBP grabs all the markdown files within the posts directory and assembles them into a **$posts** array for consumption by the template. When following a path MBP makes a **$post** object that is used similarly by a post template. The posts are stored a simple markdown files where the post title and date are pulled from the file name and modification time respectivly. No authentication, no DB, just files.

All done in a single evening, it's been a great experience. I had to keep pushing out ideas of what I could add and what I thought I needed, but I found that this forced me to think deeply about what features are really necessary and valuable.

And I have what I belive to be a very productive blogging platform (atleast for someone who knows git and markdown). Just write a post and git push.

Boom.

-Tyler@TJT.Codes