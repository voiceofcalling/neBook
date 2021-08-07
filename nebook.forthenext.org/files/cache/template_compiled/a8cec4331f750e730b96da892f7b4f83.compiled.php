<?php if(!defined("__XE__"))exit;
if (!$__Context->module_info->thumbnail_width)  $__Context->module_info->thumbnail_width  = 256;
	if (!$__Context->module_info->thumbnail_height) $__Context->module_info->thumbnail_height = 256;
if(!$__Context->module_info->content_cut_size) $__Context->module_info->content_cut_size = 240;
if(!$__Context->module_info->col_spacing) $__Context->module_info->col_spacing = 10;
if($__Context->module_info->col_spacing) $__Context->col_spacing = $__Context->module_info->col_spacing/2;
if(!$__Context->module_info->colunm_cnt) $__Context->colunm_cnt = 2;
if($__Context->module_info->colunm_cnt) $__Context->colunm_cnt = $__Context->module_info->colunm_cnt;
$__Context->colunm_width = 100/$__Context->colunm_cnt;
 ?>
<style>
.card-default li {float:left; width:<?php echo $__Context->colunm_width ?>%;padding:0 <?php echo $__Context->col_spacing ?>px}
.dummy{}
</style>
<!--#Meta:modules/board/m.skins/phiz_mboard/css/list.card.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/list.card.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(Mobile::isMobileCheckByAgent()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list_btn_top_default.html');
} ?>
<?php if($__Context->module_info->use_category=='Y'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_category.html');
} ?>
<div class="board_list card-default m-form" id="card-default">
	<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><div class="nodoc">
		<p class="text-center"><?php echo $__Context->lang->no_documents ?></p>
	</div><?php } ?>
	<?php if($__Context->grant->manager){ ?><div class="post-check">
		<span class="allcheck">
				<input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" id="btCheck" title="Check All" />
				<label for="btCheck">Check All</label>
		</span>
	</div><?php } ?>
	<?php if($__Context->document_list || $__Context->notice_list){ ?>
		<?php  $__Context->bCheck_notice = 0;  ?>
		<!-- notice -->
		<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><div class="notice">
			<h2 class="title"><i class="fa fa-volume-up red text-w500"></i><span class="notice-text"> <?php echo $__Context->lang->notice ?></span>
				<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
				<?php if($__Context->document->getCommentCount()){ ?><span> [<?php echo $__Context->document->getCommentCount() ?>]</span><?php } ?>
				<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
			</h2>
			<?php if($__Context->grant->manager){ ?><span class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" id="bCheck_notice<?php echo $__Context->bCheck_notice ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="bCheck_notice<?php echo $__Context->bCheck_notice ?>"></label></span><?php } ?>
		<?php  $__Context->bCheck_notice++;  ?>
		</div><?php } ?>
		
		<ul class="nrow">
			<?php $__Context->_idx=0 ?>
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?>
			<li<?php if($__Context->_idx>0 && $__Context->_idx % $__Context->colunm_cnt==0){ ?> class="clearLeft"<?php } ?>>
				<div class="card">
				<div class="card-height">
					<?php if($__Context->thumbnail && $__Context->document->getThumbnail()){ ?>
					<div class="card-image">
						<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>">
						<img class="thumb" src="<?php echo $__Context->document->getThumbnail($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type) ?>" alt="<?php echo $__Context->document->getTitleText() ?>" />
						</a>
						<?php if($__Context->grant->manager){ ?><span class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" id="bCheck_item<?php echo $__Context->bCheck_item ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="bCheck_item<?php echo $__Context->bCheck_item ?>"></label></span><?php } ?>
					</div>
					<?php } ?>
					<div class="card-content">
						<?php if($__Context->title){ ?><h2><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
						<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum" title="Replies">[<?php echo $__Context->document->getCommentCount() ?>]</a><?php } ?>
						<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
						</h2><?php } ?>
						<?php if($__Context->nick_name){ ?><span class="author"><i class="fa fa-user"></i>&nbsp; <?php echo $__Context->document->getNickName() ?></span><?php } ?>
						<?php if($__Context->regdate){ ?><span class="time"><i class="fa fa-clock-o"></i>&nbsp;<?php echo $__Context->document->getRegdate('Y.m.d') ?></span><?php } ?>
						<?php if($__Context->document->getCommentCount() && $__Context->comment_status){ ?><span class="btn-count"><i class="fa fa-comment-o"></i><?php echo $__Context->document->getCommentCount() ?></span><?php } ?>
						<?php if($__Context->readed_count){ ?><span class="readNum btn-count"><i class="fa fa-eye"></i>&nbsp;<?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></span><?php } ?>
						<?php if($__Context->voted_count){ ?><span class="voteNum btn-count"><i class="fa fa-thumbs-o-up"></i>&nbsp;<?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></span><?php } ?>
						<?php if($__Context->summary){ ?><p class="text"><?php echo $__Context->document->getSummary(($__Context->module_info->content_cut_size)) ?></p><?php } ?>
					</div>
				</div>
			</div>
			</li>
			<?php $__Context->_idx++ ?>
			<?php } ?>
		</ul>
	<?php } ?>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_list_footer.html') ?>
