<?php
$tag = urldecode(param('tag'));
?>
<li>
<form role="search" class="srch">
<div class="input-group">
<input name="q" type="text" class="form-control" placeholder="<?php $tag = urldecode(param('tag')); ?><?php if($tag != ''): ?>Tag Search<?php else: ?><?php if($page->isHomePage()): ?>Site Search<?php else: ?><?php if($page->isErrorPage()): ?>Site Search<?php else: ?><?php if($tag == ''): ?><?php if($page->hasVisibleChildren()): ?>Page Search<?php endif ?><?php if($page->isHomePage() == false && $page->isErrorPage() == false): ?><?php if($page->hasVisibleChildren() == false): ?>Site Search<?php endif ?><?php endif ?><?php endif ?><?php endif ?><?php endif ?><?php endif ?>" value="<?php echo urldecode(get('q')) ?>">
<div class="input-group-btn">
<button title="<?php if($tag != ''): ?>Search for pages within the tag <?php echo $tag ?><?php else: ?><?php if($page->isHomePage()): ?>Search for pages within the site<?php else: ?><?php if($page->isErrorPage()): ?>Search for pages within the site<?php else: ?><?php if($tag == ''): ?><?php if($page->hasVisibleChildren()): ?>Search for pages within the page's children<?php endif ?><?php if($page->isHomePage() == false && $page->isErrorPage() == false): ?><?php if($page->hasVisibleChildren() == false): ?>Search for pages within the site<?php endif ?><?php endif ?><?php endif ?><?php endif ?><?php endif ?><?php endif ?>" type="submit" class="srch-btn btn btn-default">
<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</button>
</div>
</div>
</form>
</li>