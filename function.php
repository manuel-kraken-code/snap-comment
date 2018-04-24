<?php
class comment {
	public function getCommentSaltiness():float {
		return $this-> commentSaltiness;
	}
	public function setCommentSaltiness(float $newCommentSaltiness): bool {
		if ($newCommentSaltiness) {
			return true;
		} else {
			return false;
		}
	}
	public function  getCommentText(): string {
		return $this-> commentText;
	}
	public function getCommentUsername(): string {
		return $this-> commentUsername;
	}
}